<?php
class Author
{
    private $authorId;
    private $name;
    private $specialName;

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
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
    public function getSpecialName()
    {
        return $this->specialName;
    }

    /**
     * @param mixed $specialName
     */
    public function setSpecialName($specialName)
    {
        $this->specialName = $specialName;
    }
}
