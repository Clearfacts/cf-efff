<?php

namespace ClearFacts\EFFF\Invoice\AccountingParty;

/**
 * Class PartyTrait
 * @package ClearFacts\EFFF\Invoice\AccountingParty
 */
trait PartyTrait
{
    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\AccountingParty\Party")
     * @Serializer\SerializedName("Party")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     *
     * @var Party
     */
    private $party;

    /**
     * @return Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * @param Party $party
     */
    public function setParty(Party $party)
    {
        $this->party = $party;
    }
}