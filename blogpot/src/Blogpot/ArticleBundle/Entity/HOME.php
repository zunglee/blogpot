<?php

namespace Blogpot\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HOME
 *
 * @ORM\Table(name="h_o_m_e")
 * @ORM\Entity(repositoryClass="Blogpot\ArticleBundle\Repository\HOMERepository")
 */
class HOME
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

