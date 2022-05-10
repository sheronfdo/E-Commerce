<?php
class Sale
{
    private $saleId;
    private $customerId;
    private $dateAndTime;
    private $subTotal;
    private $discount;
    private $netTotal;
    private $orderStatus;
    private $isApproved;
    private $isFinished;

    /**
     * @param $saleId
     * @param $customerId
     * @param $dateAndTime
     * @param $subTotal
     * @param $discount
     * @param $netTotal
     * @param $orderStatus
     * @param $isApproved
     * @param $isFinished
     */
    public function __constructWithId($saleId, $customerId, $dateAndTime, $subTotal, $discount, $netTotal, $orderStatus, $isApproved, $isFinished)
    {
        $this->saleId = $saleId;
        $this->customerId = $customerId;
        $this->dateAndTime = $dateAndTime;
        $this->subTotal = $subTotal;
        $this->discount = $discount;
        $this->netTotal = $netTotal;
        $this->orderStatus = $orderStatus;
        $this->isApproved = $isApproved;
        $this->isFinished = $isFinished;
    }
    /**
     * @param $customerId
     * @param $dateAndTime
     * @param $subTotal
     * @param $discount
     * @param $netTotal
     * @param $orderStatus
     * @param $isApproved
     * @param $isFinished
     */
    public function __constructWithoutId($customerId, $dateAndTime, $subTotal, $discount, $netTotal, $orderStatus, $isApproved, $isFinished)
    {
        $this->customerId = $customerId;
        $this->dateAndTime = $dateAndTime;
        $this->subTotal = $subTotal;
        $this->discount = $discount;
        $this->netTotal = $netTotal;
        $this->orderStatus = $orderStatus;
        $this->isApproved = $isApproved;
        $this->isFinished = $isFinished;
    }


    /**
     * @return mixed
     */
    public function getSaleId()
    {
        return $this->saleId;
    }

    /**
     * @param mixed $saleId
     */
    public function setSaleId($saleId)
    {
        $this->saleId = $saleId;
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

    /**
     * @return mixed
     */
    public function getDateAndTime()
    {
        return $this->dateAndTime;
    }

    /**
     * @param mixed $dateAndTime
     */
    public function setDateAndTime($dateAndTime)
    {
        $this->dateAndTime = $dateAndTime;
    }

    /**
     * @return mixed
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * @param mixed $subTotal
     */
    public function setSubTotal($subTotal)
    {
        $this->subTotal = $subTotal;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getNetTotal()
    {
        return $this->netTotal;
    }

    /**
     * @param mixed $netTotal
     */
    public function setNetTotal($netTotal)
    {
        $this->netTotal = $netTotal;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return mixed
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * @param mixed $isApproved
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;
    }

    /**
     * @return mixed
     */
    public function getIsFinished()
    {
        return $this->isFinished;
    }

    /**
     * @param mixed $isFinished
     */
    public function setIsFinished($isFinished)
    {
        $this->isFinished = $isFinished;
    }
}
