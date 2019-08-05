<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PingController extends Controller
{
    /**
     * @Route("/aha")
     */
    public function pingAction()
    {
        $response = new Response();
        $response->setContent(json_encode(array(
          'ping' => 'pong',
        )));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
}