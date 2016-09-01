<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="github_id", type="string", length=255, nullable=true) */
    protected $github_id;

    /** @ORM\Column(name="github_access_token", type="string", length=255, nullable=true) */
    protected $github_access_token;

    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="user")
     */
    private $articles;


    public function __construct() {
        $this->articles = new ArrayCollection();

        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getGithubId()
    {
        return $this->github_id;
    }

    /**
     * @param mixed $github_id
     */
    public function setGithubId($github_id)
    {
        $this->github_id = $github_id;
    }

    /**
     * @return mixed
     */
    public function getGithubAccessToken()
    {
        return $this->github_access_token;
    }

    /**
     * @param mixed $github_access_token
     */
    public function setGithubAccessToken($github_access_token)
    {
        $this->github_access_token = $github_access_token;
    }
}
