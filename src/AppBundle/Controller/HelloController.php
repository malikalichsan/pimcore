<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return new Response(
            '<html><body>Hello World</body></html>'
        );
    }
}