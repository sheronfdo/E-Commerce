<?php
class Stock
{
    private $stockId;
    private $bookId;
    private $batchNumber;
    private $description;
    private $pages;
    private $bookPrice;
    private $quantity;
    private $releaseDate;

    /**
     * @param $stockId
     * @param $bookId
     * @param $batchNumber
     * @param $description
     * @param $pages
     * @param $bookPrice
     * @param $quantity
     * @param $releaseDate
     */
    public function __constructWithId($stockId, $bookId, $batchNumber, $description, $pages, $bookPrice, $quantity, $releaseDate)
    {
        $this->stockId = $stockId;
        $this->bookId = $bookId;
        $this->batchNumber = $batchNumber;
        $this->description = $description;
        $this->pages = $pages;
        $this->bookPrice = $bookPrice;
        $this->quantity = $quantity;
        $this->releaseDate = $releaseDate;
    }

    /**
     * @param $bookId
     * @param $batchNumber
     * @param $description
     * @param $pages
     * @param $bookPrice
     * @param $quantity
     * @param $releaseDate
     */
    public function __constructWithoutId($bookId, $batchNumber, $description, $pages, $bookPrice, $quantity, $releaseDate)
    {
        $this->bookId = $bookId;
        $this->batchNumber = $batchNumber;
        $this->description = $description;
        $this->pages = $pages;
        $this->bookPrice = $bookPrice;
        $this->quantity = $quantity;
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getStockId()
    {
        return $this->stockId;
    }

    /**
     * @param mixed $stockId
     */
    public function setStockId($stockId)
    {
        $this->stockId = $stockId;
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

    /**
     * @return mixed
     */
    public function getBatchNumber()
    {
        return $this->batchNumber;
    }

    /**
     * @param mixed $batchNumber
     */
    public function setBatchNumber($batchNumber)
    {
        $this->batchNumber = $batchNumber;
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
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param mixed $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return mixed
     */
    public function getBookPrice()
    {
        return $this->bookPrice;
    }

    /**
     * @param mixed $bookPrice
     */
    public function setBookPrice($bookPrice)
    {
        $this->bookPrice = $bookPrice;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }
}
