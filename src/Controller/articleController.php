<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article ;


class articleController extends AbstractController  {
    /**
     * @Route("/art", name="art")
     */
    public function article ()  {
      //On récupère le manager via la vue//
        $entityManager = $this -> getDoctrine () -> getManager ();

        $article = new Article ();
        $article -> setTitle ( 'Ordinateur' );
        $article -> setContent ( 'Processeur : i5, carte graphique : GTX 1080, taille de la RAM: 32Go, capacité : 1To...');
        $article -> setCreationDate ( '29 janvier 2019' );
        $article -> setAuthorName('Jonathan');
        $article -> setCategoryName('Informatique/ Multimedia');
        $article ->setNumberViews('62');

        $entityManager -> persist ( $article );

        $entityManager -> flush ();

        return new Response ( 'Titre ' . $article -> getTitle());
    }
}


?>
