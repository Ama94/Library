<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *@ORM\Entity
 *@ORM\Table(name="book") \
 */
class Book {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     *
     */
    private $title;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     *
     */
    private $author;
    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank()
     *
     */
    private $borrowed;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     *
     */
    private $userid;
    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     *
     */
    private $BorrowDate;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getBorrowed()
    {
        return $this->borrowed;
    }

    /**
     * @param mixed $borrowed
     */
    public function setBorrowed($borrowed): void
    {
        $this->borrowed = $borrowed;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid): void
    {
        $this->userid = $userid;
    }



    /**
     * @return mixed
     */
    public function getBorrowDate()
    {
        return $this->BorrowDate;
    }

    /**
     * @param mixed $BorrowDate
     */
    public function setBorrowDate($BorrowDate): void
    {
        $this->BorrowDate = $BorrowDate;
    }





}
