<?php
class SystemUser
{
    private $userId;
    private $employeeId;
    private $userTypePositionId;
    private $username;
    private $password;

    /**
     * @param $userId
     * @param $employeeId
     * @param $userTypePositionId
     * @param $username
     * @param $password
     */
    public function __constructWithId($userId, $employeeId, $userTypePositionId, $username, $password)
    {
        $this->userId = $userId;
        $this->employeeId = $employeeId;
        $this->userTypePositionId = $userTypePositionId;
        $this->username = $username;
        $this->password = $password;
    }


    /**
     * @param $employeeId
     * @param $userTypePositionId
     * @param $username
     * @param $password
     */
    public function __constructWithoutId($employeeId, $userTypePositionId, $username, $password)
    {
        $this->employeeId = $employeeId;
        $this->userTypePositionId = $userTypePositionId;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
    public function getUserTypePositionId()
    {
        return $this->userTypePositionId;
    }

    /**
     * @param mixed $userTypePositionId
     */
    public function setUserTypePositionId($userTypePositionId)
    {
        $this->userTypePositionId = $userTypePositionId;
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
}
