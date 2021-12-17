<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offer;
use App\Form\OfferType;


/**
 *Book controller.
 *@Route("/api",name="api_")
 */
class OfferController extends AbstractFOSRestController
{

    /**
     *Lists all Books.
     *@Rest\Get("/offer")
     *
     *@return Response
     */
    public function getOfferAction()
    {
        $repository = $this->getDoctrine()->getRepository(Offer::class);
        $about = $repository->findall();
        return $this->handleView($this->view($about));
    }

    /**
     *Create About.
     *@Rest\Post("/offer")
     *
     *@return Response
     */
    public function postBookAction(Request $request)
    {
        $offer = new Offer();
        $form = $this->createForm(OfferType::class, $offer);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

}