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
    public function createEventAction(Request $request)
    {
        $organizer = new Organizer();

        $form = $this->createForm(new OrganizerType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $organizerData = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($organizerData);
            $em->flush();

//            $this->get('session')->getFlashBag()->add('notice', 'Your organizer was added!');

            return $this->redirect($this->generateUrl('homepage'));
        }

        return $this->render('frontend/create_organizer.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param         $id
     * @param Request $request
     *
     * @return Response
     *
     * @Route("/organizer/{id}/details", name="organizer_details")
     */
    public function showOrganizerAction($id, Request $request)
    {
        $organizerRepository = $this->getDoctrine()->getRepository('AppBundle:Organizer');
        $organizer           = $organizerRepository->getOrganizerById($id);

        if (!$organizer) {
            throw $this->createNotFoundException('Organizer not found.');
        }

        return $this->render('frontend/show_organizer_details.html.twig', [
            'organizer' => $organizer,
        ]);
    }
}
