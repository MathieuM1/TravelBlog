<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Articles;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $presentations = $em->getRepository('AppBundle:Presentation')->findAll();
        $articleslasts = $em->getRepository('AppBundle:Articles')->findByLastNew();
        $articleslasttens = $em->getRepository('AppBundle:Articles')->findByLastTen();

//        var_dump($articleslasttens);die();
        return $this->render('default/index.html.twig', [
            'presentations' => $presentations,
            'articlelasts' => $articleslasts,
            'articleslasttens' => $articleslasttens,
        ]);
    }

    /**
     * @Route("/westusa", name="westusa")
     */
    public function worldTravelAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $articlesWestUsas = $em->getRepository('AppBundle:Articles')->findByWestUsa();

        return $this->render('default/worldTravel.html.twig', [
            'articlesWestUsas' => $articlesWestUsas
        ]);
    }

    /**
     * Finds and displays a west usa article.
     *
     * @Route("/westusa/{id}", name="west_usa_show")
     * @Method("GET")
     */
    public function westUsaShowAction(Articles $article)
    {
        return $this->render('articles/front/show.html.twig', array(
            'article' => $article,
        ));
    }


}
