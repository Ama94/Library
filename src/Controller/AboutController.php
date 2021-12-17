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
    public function postBookAction(Request $request)
    {
        $book = new About();
        $form = $this->createForm(AboutType::class, $book);
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

    /**
     *Create Book.
     *@Rest\Post("/book/borrow/{id}")
     *
     *@return Response
     */
    public function borrow($id){
        $entitymanager = $this -> getDoctrine() -> getManager();
        $book = $this -> getDoctrine() -> getRepository(Book::class)
            -> find($id);
        $book -> setborrowed(1);
        $book -> setBorrowDate(new \DateTime());
        $entitymanager -> flush();
        return $this->handleView($this->view($book));
    }

    /**
     *Create Book.
     *@Rest\Post("/book/return/{id}")
     *
     *@return Response
     */
    public function return($id){
        $entitymanager = $this -> getDoctrine() -> getManager();
        $book = $this -> getDoctrine() -> getRepository(Book::class)
            -> find($id);
        $book -> setborrowed(0);
        $book -> setBorrowDate(null);
        $entitymanager -> flush();
        return $this->handleView($this->view($book));
    }

    /**
     *Lists all Books.
     *@Rest\Get("/overdue")
     *
     *@return Response
     */
    public function getOverdueBooksAction()
    {
        $dateTime = new \DateTime();
        $dateTime->modify('-30 day');
        $repository = $this->getDoctrine()->getRepository(Book::class);
//        $books = $repository->findBy($dateTime);
        $books = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT * FROM book WHERE DATEDIFF(current_timestamp(), BorrowDate)>30;')
            ->getResult();
        return $this->handleView($this->view($books));
    }
}