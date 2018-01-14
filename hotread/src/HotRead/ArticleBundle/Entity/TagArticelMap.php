<?php

namespace HotRead\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="TAG_ARTICLE_MAP")
 * @ORM\Entity(repositoryClass="HotRead\ArticleBundle\Repository\TagArticleMapRepository")
 */
class TagArticleMap
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
     * @var int
     *
     * @ORM\Column(name="TAG_ID", type="integer", unique=true)
     */
    private $tagId;

    /**
     * @var int
     *
     * @ORM\Column(name="ARTICLE_ID", type="integer", unique=true)
     */
    private $articleId;

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
     * Set tagId
     *
     * @param int $tagId
     *
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
    }

    /**
     * get tagId
     *
     * @param int $tagId
     *
     */
    public function getTagId()
    {
        return $this->tagId ;
    }
    
    
    /**
     * Set ArticleId
     *
     * @param int $articleId
     *
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
    }

    /**
     * get ArticleId
     *
     * @param int ArticleId
     *
     */
    public function getArticleId()
    {
        return $this->articleId ;
    }
    
    
    
}

