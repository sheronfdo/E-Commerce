<?php
class SaleDeliveryInfo
{
    private $saleDeliveryId;
    private $sasleId;
    private $receiverName;
    private $address;
    private $contactNo;

    /**
     * @return mixed
     */
    public function getSaleDeliveryId()
    {
        return $this->saleDeliveryId;
    }

    /**
     * @param mixed $saleDeliveryId
     */
    public function setSaleDeliveryId($saleDeliveryId)
    {
        $this->saleDeliveryId = $saleDeliveryId;
    }

    /**
     * @return mixed
     */
    public function getSasleId()
    {
        return $this->sasleId;
    }

    /**
     * @param mixed $sasleId
     */
    public function setSasleId($sasleId)
    {
        $this->sasleId = $sasleId;
    }

    /**
     * @return mixed
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param mixed $receiverName
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * @param mixed $contactNo
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;
    }
}
