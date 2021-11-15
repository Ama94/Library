<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *@ORM\Entity
 *@ORM\Table(name="users") \
 */
class Users
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     *
     */
    private $email;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     *
     */
    private $login;
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     *
     */
    private $password;
    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank()
     *
     */
    private $isadmin;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
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
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getIsadmin()
    {
        return $this->isadmin;
    }

    /**
     * @param mixed $isadmin
     */
    public function setIsadmin($isadmin): void
    {
        $this->isadmin = $isadmin;
    }


}