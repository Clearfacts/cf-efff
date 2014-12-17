<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClearFacts;

/**
 * Description of Efff
 *
 * @author Gert
 */
class Efff
{
    private $fileName;
    private $doc;
    private $xpath;
    
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        
        $this->doc = new \DOMDocument(); 
        $this->doc->load($this->fileName); 
        
        $this->xpath = new \DOMXpath($this->doc);
        $this->xpath->registerNamespace('i', 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2');
    }
    
    public function extractMetadata()
    {
        $invoice = $this->extractInvoice();
        $invoice['otherParty'] = $this->extractParty('AccountingSupplierParty');
        $invoice['lines'] = $this->extractLines();
        
        return $invoice;
    }
    
    public function extractPdf()
    {
        return base64_decode($this->getNodeValue($xPathPrefix . 'cac:AdditionalDocumentRefernce/cac:Attachment/cbc:EmbeddedDocumentBinaryObject[@mimeCode=\'application/pdf\']'));
    }
    
    private function extractInvoice()
    {
        $invoice = array();
     
        $type = $this->getNodeValue('/i:Invoice/cbc:InvoiceTypeCode');
        
        switch ($type)
        {
            case 380;
                $invoice['type'] = "invoice";
                break;
            case 381;
                $invoice['type'] = "creditnote";
                break;
            default:
                $invoice['type'] = "unknown type (" . $type . ")";
        }
        
        $invoice['docDate'] = $this->getNodeValue('/i:Invoice/cbc:IssueDate');
        $invoice['expirationDate'] = $this->getNodeValue('/i:Invoice/cac:PaymentMeans/cbc:PaymentDueDate');
        $invoice['docNumber'] = $this->getNodeValue('/i:Invoice/cbc:ID');
        $invoice['amount'] = $this->getNodeValue('/i:Invoice/cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount');
        $invoice['currency'] = $this->getNodeValue('/i:Invoice/cac:DocumentCurrencyCode');
        $invoice['remarks'] = $this->getNodeValue('/i:Invoice/cbc:Note');
        $invoice['ogm'] = $this->getNodeValue('/i:Invoice/cbc:PaymentMeans/cbc:InstructionID');
        
        return $invoice;        
    }
    
    private function extractParty($partyType)
    {        
        $xPathPrefix = "/i:Invoice/cac:$partyType/cac:Party/";
        
        $party = array();
        
        $party['name'] = $this->getNodeValue($xPathPrefix . 'cac:PartyName/cbc:Name');
        $party['title'] = '';
        $party['street'] = $this->getNodeValue($xPathPrefix . 'cac:PostalAddress/cbc:StreetName');
        $party['number'] = '';
        $party['box'] = '';
        $party['city'] = $this->getNodeValue($xPathPrefix . 'cac:PostalAddress/cbc:CityName');
        $party['zipcode'] = $this->getNodeValue($xPathPrefix . 'cac:PostalAddress/cbc:PostalZone');
        $party['country'] = $this->getNodeValue($xPathPrefix . 'cac:PostalAddress/cac:Country/cbc:IdentificationCode');
        $party['email'] = '';
        $party['vatNumber'] = '';
        $party['iban'] = '';
        $party['bic'] = '';
        
        return $party;        
    }
    
    private function extractLines()
    {
        $lines = array();
        
        $nodeList = $this->xpath->query('/i:Invoice/cac:TaxTotal/cac:TaxSubtotal');
        
        foreach($nodeList as $node)
        {
            $line["amountExclVat"] = $this->getNodeValue('cbc:TaxableAmount', $node);
            $line["vatPct"] = $this->getNodeValue('cbc:Percent', $node);
            $line["vatText"] = '';
            $line["vatAmount"]  = $this->getNodeValue('cbc:VatAmount', $node);
            $line["amountInclVat"];
            $line["remark"] = '';
            
            $lines[] = $line;
        }
        
        return $lines;
    }
    
    private function getNodeValue($query, $contextNode = null)
    {
        return $this->xpath->query($query, $contextNode)->item(0)->nodeValue;        
    }
    
    private function getAttribute($query, $attribute, $contextNode = null)
    {
        return $this->xpath->query($query, $contextNode)->item(0)->getAttribute($attribute);
    }
            
}
