<?php

namespace HotRead\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="VIEWS")
 * @ORM\Entity(repositoryClass="HotRead\ArticleBundle\Repository\ViewsRepository")
 */
class VIEWS
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
     * @ORM\Column(name="ARTICLE_ID", type="integer", unique=true)
     */
    private $articleId;
    
    /**
     * @var int
     *
     * @ORM\Column(name="VIEW_COUNT", type="integer")
     */
    private $viewCount;

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
    
    
    /**
     * Set viewCount
     *
     * @param int $viewCount
     *
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    /**
     * get viewCount
     *
     */
    public function getViewCount()
    {
       return $this->viewCount ;
    }
    

}