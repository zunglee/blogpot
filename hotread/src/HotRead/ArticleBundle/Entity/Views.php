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
     * @ORM\Column(name="ARTICLE_INFO_ID", type="integer", unique=true)
     */
    private $articleInfoId;
    
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
    function getArticleInfoId() {
        return $this->articleInfoId;
    }

    function setArticleInfoId($articleInfoId) {
        $this->articleInfoId = $articleInfoId;
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