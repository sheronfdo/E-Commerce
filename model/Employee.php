<?php
class Employee
{
    private $employeeId;
    private $fName;
    private $lName;
    private $nic;
    private $address;
    private $dateOfBirth;
    private $gender;
    private $dateOfRegister;

    /**
     * @param $employeeId
     * @param $fName
     * @param $lName
     * @param $nic
     * @param $address
     * @param $dateOfBirth
     * @param $gender
     * @param $dateOfRegister
     */
    public function __constructWithId($employeeId, $fName, $lName, $nic, $address, $dateOfBirth, $gender, $dateOfRegister)
    {
        $this->employeeId = $employeeId;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->nic = $nic;
        $this->address = $address;
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->dateOfRegister = $dateOfRegister;
    }

    /**
     * @param $fName
     * @param $lName
     * @param $nic
     * @param $address
     * @param $dateOfBirth
     * @param $gender
     * @param $dateOfRegister
     */
    public function __constructWithoutId($fName, $lName, $nic, $address, $dateOfBirth, $gender, $dateOfRegister)
    {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->nic = $nic;
        $this->address = $address;
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->dateOfRegister = $dateOfRegister;
    }


    /**
     * @return mixed
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * @param mixed $employeeId
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;
    }

    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @param mixed $fName
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    }

    /**
     * @return mixed
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @param mixed $lName
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    }

    /**
     * @return mixed
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * @param mixed $nic
     */
    public function setNic($nic)
    {
        $this->nic = $nic;
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
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getDateOfRegister()
    {
        return $this->dateOfRegister;
    }

    /**
     * @param mixed $dateOfRegister
     */
    public function setDateOfRegister($dateOfRegister)
    {
        $this->dateOfRegister = $dateOfRegister;
    }
}
