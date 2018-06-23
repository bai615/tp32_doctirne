<?php

namespace Application\Entity;

/**
 * Class User
 * @package Application\Entity
 *
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * @var int
     *
     * @Id
     * @Column(type="integer")
     * @GenerateValue
     */
    protected $id;

    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $username;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


}