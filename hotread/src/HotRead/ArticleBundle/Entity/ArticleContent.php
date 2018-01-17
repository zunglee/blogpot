<?php

namespace HotRead\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Tag
 *
 * @ORM\Table(name="ARTICLE_CONTENT")
 * @ORM\Entity(repositoryClass="HotRead\ArticleBundle\Repository\ArticleContentRepository")
 */
class ArticleContent
{
    /**
     * @var int
     *  
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ARTICLE_INFO_ID", type="integer", unique=true)
     */
    private $articleInfoId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CONTENT", type="string", length = 5000)
     */
    private $content;
    
    
    function getId() {
        return $this->id;
    }

    function getArticleInfoId() {
        return $this->articleInfoId;
    }

    function getContent() {
        return $this->content;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setArticleInfoId($articleInfoId) {
        $this->articleInfoId = $articleInfoId;
    }

    function setContent($content) {
        $this->content = $content;
    }

    
}

