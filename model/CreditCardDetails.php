<?php
class CreditCardDetail
{
    private $cardNumber;
    private $cardHolder;
    private $validDate;
    private $cvv;
    private $customerId;

    /**
     * @param $cardNumber
     * @param $cardHolder
     * @param $validDate
     * @param $cvv
     * @param $customerId
     */
    public function __construct($cardNumber, $cardHolder, $validDate, $cvv, $customerId)
    {
        $this->cardNumber = $cardNumber;
        $this->cardHolder = $cardHolder;
        $this->validDate = $validDate;
        $this->cvv = $cvv;
        $this->customerId = $customerId;
    }


    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param mixed $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return mixed
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * @param mixed $cardHolder
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
    }

    /**
     * @return mixed
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * @param mixed $validDate
     */
    public function setValidDate($validDate)
    {
        $this->validDate = $validDate;
    }

    /**
     * @return mixed
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @param mixed $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
}
