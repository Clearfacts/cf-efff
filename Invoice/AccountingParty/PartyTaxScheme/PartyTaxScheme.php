<?php

namespace ClearFacts\EFFF\Invoice\AccountingParty\PartyTaxScheme;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 *
 * Class PartyTaxScheme
 * @package ClearFacts\EFFF\Invoice\AccountingParty\PartyTaxScheme
 */
class PartyTaxScheme
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CompanyID")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $companyId;

    /**
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param string $companyId
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
    }


}