<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Event Controller
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class EventController extends Controller
{
    /**
     * @Route("/events", name="events")
     */
    public function eventListAction()
    {

    }
}
