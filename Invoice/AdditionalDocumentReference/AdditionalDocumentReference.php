<?php

namespace Tactics\Bundle\ServiceBundle\EFFF\Invoice\AdditionalDocumentReference;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 *
 * Class AdditionalDocumentReference
 * @package Tactics\Bundle\ServiceBundle\EFFF\Invoice\AdditionalDocumentReference
 */
class AdditionalDocumentReference
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ID")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}