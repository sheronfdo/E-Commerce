<?php
class BookWriter
{
    private $bookId;
    private $authorId;

    /**
     * @param $bookId
     * @param $authorId
     */
    public function __constructWithId($bookId, $authorId)
    {
        $this->bookId = $bookId;
        $this->authorId = $authorId;
    }
    /**
     * @param $authorId
     */
    public function __constructWithoutId($authorId)
    {
        $this->authorId = $authorId;
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
}
