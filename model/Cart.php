<?php
class Cart
{
    private $customerId;
    private $bookId;

    /**
     * @param $customerId
     * @param $bookId
     */
    public function __construct($customerId, $bookId)
    {
        $this->customerId = $customerId;
        $this->bookId = $bookId;
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
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * @param mixed $bookId
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }
}
