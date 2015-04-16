<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Event;
use AppBundle\Form\Type\EventType;

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

    /**
     * @param Request $request
     *
     * @return Response
     *
     * @Route("/event/create", name="event_create")
     */
    public function createEventAction(Request $request)
    {
        $event = new Event();

        $form = $this->createForm(new EventType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $eventData = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($eventData);
            $em->flush();

//            $this->get('session')->getFlashBag()->add('notice', 'Your event was added!');

            return $this->redirect($this->generateUrl('homepage'));
        }

        return $this->render('frontend/create_event.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param int $id ID
     *
     * @return Response
     *
     * @Route("/event/{id}/details", name="event_details")
     */
    public function eventDetails($id)
    {
        $eventRepository = $this->getDoctrine()->getRepository('AppBundle:Event');
        $event = $eventRepository->findEventById($id);

        if(!$event)
            throw $this->createNotFoundException('Event not found!!');

        $evorgRepository = $this->getDoctrine()->getRepository('AppBundle:EventOrg');
        $organizer = $evorgRepository->getOrganizer($event);

        return $this->render('frontend/event_details.html.twig', [
            'event' => $event,
            'organizer' => $organizer,
        ]);
    }
}
