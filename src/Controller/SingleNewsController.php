<?php


namespace App\Controller;
use App\Entity\News;
use App\Form\NewsType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\About;
use App\Form\AboutType;


/**
 *Book controller.
 *@Route("/api",name="api_")
 */
class SingleNewsController extends AbstractFOSRestController
{
    /**
     *Create News.
     *@Rest\Post("/singlenews")
     *
     *@return Response
     */
    public function postNewsAction(Request $request)
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     *Create News.
     *@Rest\Put("/singlenews/{id}")
     *
     *@return Response
     */
    public function putNewsAction($id, Request $request)
    {
//        $news = new News();
        $data = json_decode($request->getContent(), true);
//        $form->submit($data);
        $news = $this -> getDoctrine() -> getRepository(News::class)
            -> find($id);
        $form = $this->createForm(NewsType::class, $news);
        $form->submit($data);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     *Create Book.
     *@Rest\Get("/singlenews/{id}")
     *
     *@return Response
     */
    public function getNews($id){
        $entitymanager = $this -> getDoctrine() -> getManager();
        $news = $this -> getDoctrine() -> getRepository(News::class)
            -> find($id);
        return $this->handleView($this->view($news));
    }
}