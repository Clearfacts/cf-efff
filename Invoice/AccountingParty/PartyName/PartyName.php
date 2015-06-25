<?php

namespace Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PartyName;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 *
 * Class Name
 * @package Tactics\Bundle\ServiceBundle\EFFF\Invoice\AccountingParty\PartyName
 */
class PartyName
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}