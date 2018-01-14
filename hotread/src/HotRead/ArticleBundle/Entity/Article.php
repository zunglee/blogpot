<?php

namespace HotRead\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Description of Article Entity class to hold the 
 * persistent data
 *
 * @author ankitesh
 * Yolo !!!
 * 
 * @ORM\Entity(repositoryClass="HotRead\ArticleBundle\Repository\ArticleRepository")
 * @ORM\Table(name="ARTICLE")
 */
class Article {
    
    /**
     * @var int
     * @ORM\Column(name="ID",type="integer")
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;
    
    /**
     * @var string
     * @ORM\Column(name="TITLE",type="string", length=100)
     */ 
    private $title;
    
    /**
     * @var string
     * @ORM\Column(name="CONTENT",type="text")
     */
    private $content;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    
    /**
     * Set title
     *
     * @return string
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Set content
     *
     * @return string
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

}
