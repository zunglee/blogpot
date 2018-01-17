<?php

namespace HotRead\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("/")
     * */
    public function homeAction()
    {
        return $this->render('@HotReadArticle/Desktop/homepage.html.twig');
    }
    
    
    /**
     * Matches /blog exactly
     *
     * @Route("/x", name="blog_list")
     */
    public function farziAction()
    {
        return $this->render('@HotReadArticle/Desktop/homepage.html.twig');
    }
    
    
}
