<?php

namespace ClearFacts\EFFF\Invoice\PaymentMeans;

use JMS\Serializer\Annotation as Serializer;
use ClearFacts\EFFF\Invoice\PaymentMeans\PayeeFinancialAccount\PayeeFinancialAccount;

/**
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 * @Serializer\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 *
 * Class PaymentMeans
 * @package ClearFacts\EFFF\Invoice\PaymentMeans
 */
class PaymentMeans
{
    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\SerializedName("PaymentDueDate")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var \DateTime
     */
    private $paymentDueDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("InstructionID")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     *
     * @var string
     */
    private $instructionId;



    /**
     * @Serializer\Type("ClearFacts\EFFF\Invoice\PaymentMeans\PayeeFinancialAccount\PayeeFinancialAccount")
     * @Serializer\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @Serializer\SerializedName("PayeeFinancialAccount")
     *
     * @var PayeeFinancialAccount
     */
    private $payeeFinancialAccount;

    /**
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * @param \DateTime $paymentDueDate
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate = null)
    {
        $this->paymentDueDate = $paymentDueDate;
    }

    /**
     * @return string
     */
    public function getInstructionId()
    {
        return $this->instructionId;
    }

    /**
     * @param string $instructionId
     */
    public function setInstructionId($instructionId)
    {
        $this->instructionId = $instructionId;
    }

    /**
     * @return PayeeFinancialAccount
     */
    public function getPayeeFinancialAccount()
    {
        return $this->payeeFinancialAccount;
    }

    /**
     * @param PayeeFinancialAccount $payeeFinancialAccount
     */
    public function setPayeeFinancialAccount(PayeeFinancialAccount $payeeFinancialAccount)
    {
        $this->payeeFinancialAccount = $payeeFinancialAccount;
    }


}