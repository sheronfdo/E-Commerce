<?php
class Book
{
    private $bookId;
    private $name;
    private $publisherId;
    private $categoryId;
    private $description;

    /**
     * @param $bookId
     * @param $name
     * @param $publisherId
     * @param $categoryId
     * @param $description
     */
    public function __constructWithId($bookId, $name, $publisherId, $categoryId, $description)
    {
        $this->bookId = $bookId;
        $this->name = $name;
        $this->publisherId = $publisherId;
        $this->categoryId = $categoryId;
        $this->description = $description;
    }
    /**
     * @param $name
     * @param $publisherId
     * @param $categoryId
     * @param $description
     */
    public function __constructWithoutId($name, $publisherId, $categoryId, $description)
    {
        $this->name = $name;
        $this->publisherId = $publisherId;
        $this->categoryId = $categoryId;
        $this->description = $description;
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
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
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
}
