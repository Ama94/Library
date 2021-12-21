<?php


namespace App\Controller;
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
class AboutController extends AbstractFOSRestController
{

    /**
     *Lists all Books.
     *@Rest\Get("/about")
     *
     *@return Response
     */
    public function getAboutAction()
    {
        $repository = $this->getDoctrine()->getRepository(About::class);
        $about = $repository->findall();
        return $this->handleView($this->view($about));
    }

    /**
     *Create About.
     *@Rest\Post("/about")
     *
     *@return Response
     */
    public function postAboutAction(Request $request)
    {
        $about = new About();
        $form = $this->createForm(AboutType::class, $about);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($about);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }
}