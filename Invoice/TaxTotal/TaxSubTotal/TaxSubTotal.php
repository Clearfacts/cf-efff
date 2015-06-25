<?php

namespace ClearFacts\EFFF\Invoice\TaxTotal\TaxSubTotal;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 *
 * Class TaxSubTotal
 * @package ClearFacts\EFFF\Invoice\TaxTotal\TaxSubTotal
 */
class TaxSubTotal
{
    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("TaxableAmount")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var float
     */
    private $taxableAmount;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("Percent")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var float
     */
    private $percent;


    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("TaxAmount")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var float
     */
    private $taxAmount;

    /**
     * @return float
     */
    public function getTaxableAmount()
    {
        return $this->taxableAmount;
    }

    /**
     * @param float $taxableAmount
     */
    public function setTaxableAmount($taxableAmount)
    {
        $this->taxableAmount = $taxableAmount;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @param float $taxAmount
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
    }
}