<?php
  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\Form\Extension\Core\Type\TextType;
  use Symfony\Component\Form\Extension\Core\Type\TextareaType;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;

  class ContactController extends Controller {
      /**
       * @Route("/Zemail/new")
       * @Method({"GET", "POST"})
       */
      public function index () {
          // return new Response('<html><body>Hello</body></html>');

          return $this->render('zemail/form.html.twig');

      }

      

      
  }