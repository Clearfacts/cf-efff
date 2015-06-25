<?php

namespace Tactics\Bundle\ServiceBundle\EFFF\Invoice\TaxTotal;

use JMS\Serializer\Annotation as Serializer;
use Tactics\Bundle\ServiceBundle\EFFF\Invoice\TaxTotal\TaxSubTotal\TaxSubTotal;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class TaxTotal
 * @package Tactics\Bundle\ServiceBundle\EFFF\Invoice\TaxTotal
 */
class TaxTotal
{
    /**
     * @Serializer\Type("array<Tactics\Bundle\ServiceBundle\EFFF\Invoice\TaxTotal\TaxSubTotal\TaxSubTotal>")
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