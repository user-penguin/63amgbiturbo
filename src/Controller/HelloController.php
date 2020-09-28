<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    /**
     * @return Response
     */
    public function hello() : Response
    {
        return new Response(
            '<html lang="en"><body>wuzzap!</body></html>'
        );
    }
}