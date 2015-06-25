<?php

namespace Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingSupplierParty;

use JMS\Serializer\Annotation as Serializer;
use Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PartyTrait;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class AccountingSupplierParty
 * @package Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingSupplierParty
 */
class AccountingSupplierParty
{

    use PartyTrait;
}