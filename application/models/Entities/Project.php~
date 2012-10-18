<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Project
 */
class Project
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
     * @var datetime $create_date
     */
    private $create_date;

    /**
     * @var integer $deleted
     */
    private $deleted;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $todos;

    /**
     * @var Entities\User
     */
    private $user;

    public function __construct()
    {
        $this->todos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Project
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
     * Set create_date
     *
     * @param datetime $createDate
     * @return Project
     */
    public function setCreateDate($createDate)
    {
        $this->create_date = $createDate;
        return $this;
    }

    /**
     * Get create_date
     *
     * @return datetime 
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return Project
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
     * Add todos
     *
     * @param Entities\Todo $todos
     * @return Project
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
     * Set user
     *
     * @param Entities\User $user
     * @return Project
     */
    public function setUser(\Entities\User $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Entities\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}