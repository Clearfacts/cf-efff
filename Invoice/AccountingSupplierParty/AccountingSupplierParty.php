<?php

namespace ClearFacts\EFFF\Invoice\AccountingSupplierParty;

use JMS\Serializer\Annotation as Serializer;
use ClearFacts\EFFF\Invoice\AccountingParty\PartyTrait;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class AccountingSupplierParty
 * @package ClearFacts\EFFF\Invoice\AccountingSupplierParty
 */
class AccountingSupplierParty
{

    use PartyTrait;
}