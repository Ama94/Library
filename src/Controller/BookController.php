<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;
use App\Form\BookType;


/**
 *Book controller.
 *@Route("/api",name="api_")
 */
class BookController extends AbstractFOSRestController
{

    /**
     *Lists all Books.
     *@Rest\Get("/books")
     *
     *@return Response
     */
    public function getBookAction()
    {
        $repository = $this->getDoctrine()->getRepository(Book::class);
        $books = $repository->findall();
        return $this->handleView($this->view($books));
    }

    /**
     *Create Book.
     *@Rest\Post("/book")
     *
     *@return Response
     */
    public function postBookAction(Request $request)
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
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