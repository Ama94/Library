<?php

namespace App\Controller;
use App\Entity\News;

use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;

/**
 *Book controller.
 *@Route("/api",name="api_")
 */
class NewsController extends AbstractFOSRestController
{

    /**
     *Lists all Books.
     *@Rest\Get("/news")
     *
     *@return Response
     */
    public function getNewsAction()
    {
        $repository = $this->getDoctrine()->getRepository(News::class);
        $news = $repository->findall();
        return $this->handleView($this->view($news));
    }
}