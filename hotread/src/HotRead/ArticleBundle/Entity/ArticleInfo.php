<?php

namespace HotRead\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Description of Article Entity class to hold the 
 * article info 
 *
 * @author ankitesh
 * Yolo !!!
 * 
 * @ORM\Entity(repositoryClass="HotRead\ArticleBundle\Repository\ArticleInfoRepository")
 * @ORM\Table(name="ARTICLE_INFO")
 */
class ArticleInfo {
    
    /**
     * @var int
     * @ORM\Column(name="ID",type="integer")
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;
    
    /**
     * @var string
     * @ORM\Column(name="ARTICLE_ID",type="string", length=100,unique=true)
     */ 
    private $articleId;
     
     
     /**
     * @var string
     * @ORM\Column(name="HEADING",type="string", length=500)
     */ 
    private $heading;
    
    /**
     * @var string
     * @ORM\Column(name="SEO_TITLE",type="string", length=100)
     */ 
    private $seoTitle;
    
    /**
     * @var string
     * @ORM\Column(name="SEO_URL",type="string", length=100)
     */ 
    private $seoUrl;
    
    /**
     * @var string
     * @ORM\Column(name="ACTIVE",type="boolean", nullable=false, options={"default":0})
     */
    private $active; 

    function getId() {
        return $this->id;
    }

    function getArticleId() {
        return $this->articleId;
    }

    function getHeading() {
        return $this->heading;
    }

    function getSeoTitle() {
        return $this->seoTitle;
    }

    function getSeoUrl() {
        return $this->seoUrl;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setArticleId($articleId) {
        $this->articleId = $articleId;
    }

    function setHeading($heading) {
        $this->heading = $heading;
    }

    function setSeoTitle($seoTitle) {
        $this->seoTitle = $seoTitle;
    }

    function setSeoUrl($seoUrl) {
        $this->seoUrl = $seoUrl;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function getActive() {
       return  $this->active;
    }


}
