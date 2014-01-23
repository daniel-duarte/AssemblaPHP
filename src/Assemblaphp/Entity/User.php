<?php
/**
 * Created for No Reason on 1/20/14.
 *
 * @author Kevin Nuut
 */

namespace Assemblaphp\Entity;

/**
 * Class User
 *
 * @package Krush\Assembla
 */
class User extends EntityAbstract
{
    private $id;
    private $login;
    private $name;
    private $email;
    private $organization;
    private $phone;
    private $im;
    private $im2;
    private $picture;

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $im
     */
    public function setIm($im)
    {
        $this->im = $im;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * @param mixed $im2
     */
    public function setIm2($im2)
    {
        $this->im2 = $im2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIm2()
    {
        return $this->im2;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
    
} 