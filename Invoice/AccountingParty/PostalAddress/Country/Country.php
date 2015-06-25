<?php

namespace ClearFacts\EFFF\Invoice\AccountingParty\PostalAddress\Country;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 *
 * Class Country
 * @package ClearFacts\EFFF\Invoice\AccountingParty\PostalAddress\Country
 */
class Country
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("IdentificationCode")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $identificationCode;

    /**
     * @return string
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
    }

    /**
     * @param string $identificationCode
     */
    public function setIdentificationCode($identificationCode)
    {
        $this->identificationCode = $identificationCode;
    }
}