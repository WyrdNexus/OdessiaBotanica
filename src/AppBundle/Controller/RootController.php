<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RootController extends BaseController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('root/home.html.twig');
    }
}
