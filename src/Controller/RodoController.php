<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Rodo;
use App\Form\RodoType;


/**
 *Book controller.
 *@Route("/api",name="api_")
 */
class RodoController extends AbstractFOSRestController
{

    /**
     *Lists all Books.
     *@Rest\Get("/rodo")
     *
     *@return Response
     */
    public function getRodoAction()
    {
        $repository = $this->getDoctrine()->getRepository(Rodo::class);
        $about = $repository->findall();
        return $this->handleView($this->view($about));
    }

    /**
     *Create About.
     *@Rest\Post("/rodo")
     *
     *@return Response
     */
    public function postBookAction(Request $request)
    {
        $book = new Rodo();
        $form = $this->createForm(RodoType::class, $book);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

}