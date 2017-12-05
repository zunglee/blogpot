<?php

namespace Blogpot\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    }

   public function homeAction(){
      die('Here in Home');
        return $this->render('BlogpotArticleBundle:Default:index.html.twig');
}



}
