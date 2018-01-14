<?php

namespace HotRead\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function homeAction()
    {
        return $this->render('@HotReadArticle/Desktop/homepage.html.twig');
    }
}
