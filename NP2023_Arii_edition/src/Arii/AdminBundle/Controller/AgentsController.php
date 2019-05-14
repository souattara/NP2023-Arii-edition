<?php

namespace Arii\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AgentsController extends Controller
{
    public function indexAction()
    {
        return $this->render('AriiAdminBundle:Agents:index.html.twig');
    }
    
}
