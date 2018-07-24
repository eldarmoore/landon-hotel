<?php
// src/AppBundle/Controller/ReservationsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationsController extends Controller
{

    /**
     * @Route("/reservations", name="reservations")
     **/
    public function showIndex()
    {

        return $this->render("reservations/index.html.twig");

    }

    /**
     * @Route("/reservation/{id_client}", name="booking")
     */
    public function book(Request $request, $id_client)
    {
        $data['id_client'] = $id_client;
        return$this->render("reservations/book.html.twig", $data);
    }

}