<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\User
 */
class User
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $gender
     */
    private $gender;

    /**
     * @var integer $deleted
     */
    private $deleted;

    /**
     * @var date $last_login
     */
    private $last_login;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $todos;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $projects;

    public function __construct()
    {
        $this->todos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return User
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set last_login
     *
     * @param date $lastLogin
     * @return User
     */
    public function setLastLogin($lastLogin)
    {
        $this->last_login = $lastLogin;
        return $this;
    }

    /**
     * Get last_login
     *
     * @return date 
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Add todos
     *
     * @param Entities\Todo $todos
     * @return User
     */
    public function addTodo(\Entities\Todo $todos)
    {
        $this->todos[] = $todos;
        return $this;
    }

    /**
     * Get todos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTodos()
    {
        return $this->todos;
    }

    /**
     * Add projects
     *
     * @param Entities\Project $projects
     * @return User
     */
    public function addProject(\Entities\Project $projects)
    {
        $this->projects[] = $projects;
        return $this;
    }

    /**
     * Get projects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
}