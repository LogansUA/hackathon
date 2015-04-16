<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Organizer;
use AppBundle\Form\Type\OrganizerType;

/**
 * Organizer Controller
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class OrganizerController extends Controller
{
    /**
     * @Route("/organizers", name="organizers")
     */
    public function organizerListAction()
    {

    }

    /**
     * @param Request $request
     *
     * @return Response
     *
     * @Route("/organizer/create", name="organizer_create")
     */
    public function createOrganizerAction(Request $request)
    {
        $organizer = new Organizer();

        $form = $this->createForm('organizer', $organizer);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($organizer);
            $em->flush();

//            $this->get('session')->getFlashBag()->add('notice', 'Your organizer was added!');

            return $this->redirect($this->generateUrl('homepage'));
        }

        return $this->render('frontend/create_event.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
