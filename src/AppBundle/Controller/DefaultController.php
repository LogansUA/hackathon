<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $eventRepository = $this->getDoctrine()->getRepository('AppBundle:Event');
        $eventList = $eventRepository->getAllEvents();

        return $this->render('default/index.html.twig', [
            'event_list' => $eventList,
        ]);
    }
}
