<?php

namespace ClearFacts\EFFF\Invoice;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use ClearFacts\EFFF\Invoice\AccountingCustomerParty\AccountingCustomerParty;
use ClearFacts\EFFF\Invoice\AccountingSupplierParty\AccountingSupplierParty;
use ClearFacts\EFFF\Invoice\AdditionalDocumentReference\AdditionalDocumentReference;
use ClearFacts\EFFF\Invoice\LegalMonetaryTotal\LegalMonetaryTotal;
use ClearFacts\EFFF\Invoice\PaymentMeans\PaymentMeans;
use ClearFacts\EFFF\Invoice\TaxTotal\TaxTotal;


/**
 * @Serializer\ExclusionPolicy("none")
 * @Serializer\XmlRoot("Invoice")
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class Invoice
 * @package ClearFacts\EFFF
 */
class Invoice
{
    const TYPE_INVOICE = 380;
    const TYPE_CREDIT_NOTE = 381;

    /**
     * @Serializer\Type("integer")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @Serializer\SerializedName("ID")
     *
     * @var int
     */
    private $id;

    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @Serializer\SerializedName("IssueDate")
     *
     * @var \DateTime
     */
    private $issueDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @Serializer\SerializedName("InvoiceTypeCode")
     *
     * @var string
     */
    private $invoiceTypeCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @Serializer\SerializedName("Note")
     *
     * @var string
     */
    private $note;

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @Serializer\SerializedName("DocumentCurrencyCode")
     *
     * @var string
     */
    private $documentCurrencyCode;

    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\PaymentMeans\PaymentMeans")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("PaymentMeans")
     *
     * @var PaymentMeans
     */
    private $paymentMeans;

    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\LegalMonetaryTotal\LegalMonetaryTotal")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("LegalMonetaryTotal")
     *
     * @var LegalMonetaryTotal
     */
    private $legalMonetaryTotal;

    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\AdditionalDocumentReference\AdditionalDocumentReference")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("AdditionalDocumentReference")
     *
     * @var AdditionalDocumentReference
     */
    private $additionalDocumentReference;

    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\AccountingSupplierParty\AccountingSupplierParty")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("AccountingSupplierParty")
     *
     * @var AccountingSupplierParty
     */
    private $accountingSupplierParty;

    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\AccountingCustomerParty\AccountingCustomerParty")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("AccountingCustomerParty")
     *
     * @var AccountingCustomerParty
     */
    private $accountingCustomerParty;

    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\TaxTotal\TaxTotal")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("TaxTotal")
     *
     * @var TaxTotal
     */
    private $taxTotal;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @param \DateTime $issueDate
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
    }

    /**
     * @return int
     */
    public function getInvoiceTypeCode()
    {
        return $this->invoiceTypeCode;
    }

    /**
     * @param int $invoiceTypeCode
     */
    public function setInvoiceTypeCode($invoiceTypeCode)
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function getDocumentCurrencyCode()
    {
        return $this->documentCurrencyCode;
    }

    /**
     * @param string $documentCurrencyCode
     */
    public function setDocumentCurrencyCode($documentCurrencyCode)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
    }

    /**
     * @return PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param PaymentMeans $paymentMeans
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
    }

    /**
     * @return LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * @param LegalMonetaryTotal $legalMonetaryTotal
     */
    public function setLegalMonetaryTotal(LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
    }

    /**
     * @return AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * @param AccountingSupplierParty $accountingSupplierParty
     */
    public function setAccountingSupplierParty(AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
    }

    /**
     * @return AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * @param AccountingCustomerParty $accountingCustomerParty
     */
    public function setAccountingCustomerParty(AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
    }

    /**
     * @return TaxTotal
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * @param TaxTotal $taxTotal
     */
    public function setTaxTotal(TaxTotal $taxTotal)
    {
        $this->taxTotal = $taxTotal;
    }

    /**
     * @return AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * @param AdditionalDocumentReference $additionalDocumentReference
     */
    public function setAdditionalDocumentReference(AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
    }
}