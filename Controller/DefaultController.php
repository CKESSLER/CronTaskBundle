<?php

namespace CK\CronTaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CKCronTaskBundle:Default:index.html.twig');
    }
}
