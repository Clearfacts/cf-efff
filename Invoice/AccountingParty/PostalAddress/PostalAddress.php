<?php

namespace ClearFacts\EFFF\Invoice\AccountingParty\PostalAddress;

use JMS\Serializer\Annotation as Serializer;
use ClearFacts\EFFF\Invoice\AccountingParty\PostalAddress\Country\Country;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class PostalAddress
 * @package ClearFacts\EFFF\Invoice\AccountingParty\PartyName
 */
class PostalAddress
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("StreetName")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $streetName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BuildingNumber")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $buildingNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CityName")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $cityName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PostalZone")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $postalZone;

    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\AccountingParty\PostalAddress\Country\Country")
     * @Serializer\SerializedName("Country")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     *
     * @var Country
     */
    private $country;

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string
     */
    public function getPostalZone()
    {
        return $this->postalZone;
    }

    /**
     * @param string $postalZone
     */
    public function setPostalZone($postalZone)
    {
        $this->postalZone = $postalZone;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * @param string $buildingNumber
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
    }
}