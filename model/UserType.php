<?php
class UserType
{
    private $positionId;
    private $description;
    private $sale;
    private $book;
    private $stock;
    private $employee;
    private $customer;
    private $order;
    private $user;
    private $shipment;

    /**
     * @return mixed
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * @param mixed $positionId
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * @param mixed $sale
     */
    public function setSale($sale)
    {
        $this->sale = $sale;
    }

    /**
     * @return mixed
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * @param mixed $book
     */
    public function setBook($book)
    {
        $this->book = $book;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param mixed $employee
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param mixed $shipment
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
    }
}
