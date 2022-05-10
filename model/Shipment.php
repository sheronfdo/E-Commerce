<?php
class Shipment
{
    private $shipmentId;
    private $saleId;
    private $systemUser;
    private $isDelivered;

    /**
     * @param $shipmentId
     * @param $saleId
     * @param $systemUser
     * @param $isDelivered
     */
    public function __constructWithId($shipmentId, $saleId, $systemUser, $isDelivered)
    {
        $this->shipmentId = $shipmentId;
        $this->saleId = $saleId;
        $this->systemUser = $systemUser;
        $this->isDelivered = $isDelivered;
    }

    /**
     * @param $saleId
     * @param $systemUser
     * @param $isDelivered
     */
    public function __constructWithoutId($saleId, $systemUser, $isDelivered)
    {
        $this->saleId = $saleId;
        $this->systemUser = $systemUser;
        $this->isDelivered = $isDelivered;
    }



    /**
     * @return mixed
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * @param mixed $shipmentId
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;
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
    public function getSystemUser()
    {
        return $this->systemUser;
    }

    /**
     * @param mixed $systemUser
     */
    public function setSystemUser($systemUser)
    {
        $this->systemUser = $systemUser;
    }

    /**
     * @return mixed
     */
    public function getIsDelivered()
    {
        return $this->isDelivered;
    }

    /**
     * @param mixed $isDelivered
     */
    public function setIsDelivered($isDelivered)
    {
        $this->isDelivered = $isDelivered;
    }
}
