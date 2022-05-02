<?php
class Shipment
{
    private $shipmentId;
    private $saleId;
    private $systemUser;
    private $isDelivered;

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
