<?php

namespace ClearFacts\EFFF\Invoice\AccountingCustomerParty;

use JMS\Serializer\Annotation as Serializer;
use ClearFacts\EFFF\Invoice\AccountingParty\PartyTrait;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class Party
 * @package ClearFacts\EFFF\Invoice\AccountingCustomerParty
 */
class AccountingCustomerParty
{
    use PartyTrait;
}