<?php

namespace HotRead\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
die('Here in the');      
  return $this->render('HotReadArticleBundle:Default:index.html.twig');
    }
}
