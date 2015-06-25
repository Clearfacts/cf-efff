<?php

namespace ClearFacts\EFFF\Invoice\TaxTotal;

use JMS\Serializer\Annotation as Serializer;
use ClearFacts\EFFF\Invoice\TaxTotal\TaxSubTotal\TaxSubTotal;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class TaxTotal
 * @package ClearFacts\EFFF\Invoice\TaxTotal
 */
class TaxTotal
{
    /**
     * @Serializer\Type("array<ClearFacts\EFFF\Invoice\TaxTotal\TaxSubTotal\TaxSubTotal>")
     * @Serializer\XmlList(entry="TaxSubtotal", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("TaxSubtotal")
     *
     * @var array
     */
    private $taxSubTotal;

    /**
     * @return TaxSubTotal[]
     */
    public function getTaxSubTotal()
    {
        return $this->taxSubTotal;
    }

    /**
     * @param array $taxSubTotal
     */
    public function setTaxSubTotal(array $taxSubTotal)
    {
        $this->taxSubTotal = $taxSubTotal;
    }
}