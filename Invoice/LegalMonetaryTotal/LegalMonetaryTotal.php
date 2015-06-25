<?php

namespace ClearFacts\EFFF\Invoice\LegalMonetaryTotal;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 *
 * Class LegalMonetaryTotal
 * @package ClearFacts\EFFF\Invoice\LegalMonetaryTotal
 */
class LegalMonetaryTotal
{
    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("TaxInclusiveAmount")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     *
     * @var float
     */
    private $taxInclusiveAmount;

    /**
     * @return float
     */
    public function getTaxInclusiveAmount()
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * @param float $taxInclusiveAmount
     */
    public function setTaxInclusiveAmount($taxInclusiveAmount)
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
    }
}