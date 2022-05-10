<?php
class Customer
{
    private $customerId;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $gender;
    private $mobileNo;
    private $address;
    private $dateOfBirth;
    private $dateOfJoined;

    /**
     * @param $customerId
     * @param $username
     * @param $password
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $gender
     * @param $mobileNo
     * @param $address
     * @param $dateOfBirth
     * @param $dateOfJoined
     */
    public function __constructWithId($customerId, $username, $password, $firstName, $lastName, $email, $gender, $mobileNo, $address, $dateOfBirth, $dateOfJoined)
    {
        $this->customerId = $customerId;
        $this->username = $username;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->gender = $gender;
        $this->mobileNo = $mobileNo;
        $this->address = $address;
        $this->dateOfBirth = $dateOfBirth;
        $this->dateOfJoined = $dateOfJoined;
    }

    /**
     * @param $username
     * @param $password
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $gender
     * @param $mobileNo
     * @param $address
     * @param $dateOfBirth
     * @param $dateOfJoined
     */
    public function __constructWithoutId($username, $password, $firstName, $lastName, $email, $gender, $mobileNo, $address, $dateOfBirth, $dateOfJoined)
    {
        $this->username = $username;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->gender = $gender;
        $this->mobileNo = $mobileNo;
        $this->address = $address;
        $this->dateOfBirth = $dateOfBirth;
        $this->dateOfJoined = $dateOfJoined;
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * @param mixed $mobileNo
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;
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
    public function getDateOfJoined()
    {
        return $this->dateOfJoined;
    }

    /**
     * @param mixed $dateOfJoined
     */
    public function setDateOfJoined($dateOfJoined)
    {
        $this->dateOfJoined = $dateOfJoined;
    }
}
