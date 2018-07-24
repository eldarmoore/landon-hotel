<?php
// src/AppBundle/Controller/AdminController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function showIndex()
    {
        // Basic route
        // return new Response('<html><body>Landon Hotel App</body></html>');

        // Advanced route
        return $this->render('admin/index.html.twig');
    }
}