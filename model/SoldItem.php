<?php
class SoldItem
{
    private $soldItemId;
    private $stockId;
    private $saleId;
    private $quantity;
    private $unitPrice;
    private $total;

    /**
     * @param $soldItemId
     * @param $stockId
     * @param $saleId
     * @param $quantity
     * @param $unitPrice
     * @param $total
     */
    public function __constructWithId($soldItemId, $stockId, $saleId, $quantity, $unitPrice, $total)
    {
        $this->soldItemId = $soldItemId;
        $this->stockId = $stockId;
        $this->saleId = $saleId;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->total = $total;
    }

    /**
     * @param $stockId
     * @param $saleId
     * @param $quantity
     * @param $unitPrice
     * @param $total
     */
    public function __constructWithoutId($stockId, $saleId, $quantity, $unitPrice, $total)
    {
        $this->stockId = $stockId;
        $this->saleId = $saleId;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->total = $total;
    }


    /**
     * @return mixed
     */
    public function getSoldItemId()
    {
        return $this->soldItemId;
    }

    /**
     * @param mixed $soldItemId
     */
    public function setSoldItemId($soldItemId)
    {
        $this->soldItemId = $soldItemId;
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
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
}
