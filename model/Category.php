<?php
class Category
{
    private $categoryId;
    private $name;

    /**
     * @param $categoryId
     * @param $name
     */
    public function __constructWithId($categoryId, $name)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
    }

    /**
     * @param $name
     */
    public function __constructWithoutId($name)
    {
        $this->name = $name;
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
}
