<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 *@ORM\Entity
 *@ORM\Table(name="news") \
 */
class News {

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
    private $description;
    /**
     * @ORM\Column(type="text", nullable="true")
     *
     */
    private $newsDate;
    /**
     * @ORM\Column(type="text", nullable="true")
     *
     */
    private $mainImage;
    /**
     * @ORM\Column(type="text", nullable="true")
     *
     */
    private $images;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getNewsDate()
    {
        return $this->newsDate;
    }

    /**
     * @param mixed $newsDate
     */
    public function setNewsDate($newsDate): void
    {
        $this->newsDate = $newsDate;
    }

    /**
     * @return mixed
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    /**
     * @param mixed $mainImage
     */
    public function setMainImage($mainImage): void
    {
        $this->mainImage = $mainImage;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $Images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }
}
