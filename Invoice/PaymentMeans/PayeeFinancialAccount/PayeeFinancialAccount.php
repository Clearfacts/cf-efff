<?php

namespace Tactics\Bundle\ServiceBundle\EFFF\Invoice\PaymentMeans\PayeeFinancialAccount;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 *
 * Class PayeeFinancialAccount
 * @package Tactics\Bundle\ServiceBundle\EFFF\Invoice\PaymentMeans\PayeeFinancialAccount
 */
class PayeeFinancialAccount
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}