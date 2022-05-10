<?php
class Publisher
{
    private $publisherId;
    private $name;
    private $address;
    private $contactNo;

    /**
     * @param $publisherId
     * @param $name
     * @param $address
     * @param $contactNo
     */
    public function __constructWithId($publisherId, $name, $address, $contactNo)
    {
        $this->publisherId = $publisherId;
        $this->name = $name;
        $this->address = $address;
        $this->contactNo = $contactNo;
    }
    /**
     * @param $name
     * @param $address
     * @param $contactNo
     */
    public function __constructWithoutId($name, $address, $contactNo)
    {
        $this->name = $name;
        $this->address = $address;
        $this->contactNo = $contactNo;
    }

    /**
     * @return mixed
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * @param mixed $publisherId
     */
    public function setPublisherId($publisherId)
    {
        $this->publisherId = $publisherId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
