<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/autourdumonde", name="worldTravel")
     */
    public function worldTravelAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $articlesWorlds = $em->getRepository('AppBundle:Articles')->findAll();

        return $this->render('default/worldTravel.html.twig', [
            'articlesWorlds' => $articlesWorlds
        ]);
    }


}
