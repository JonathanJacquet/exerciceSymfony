<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class testController extends AbstractController {
     /**
      * @Route("/accueil")
      */
      public function accueil ()  {
      $welcome = "Bienvenue sur l'accueil du site";
        return new Response(
          '<html><body>'.$welcome.'</body></html>'
        );
      }
      /**
       * @Route("/article/{id}", name="app_article", requirements={"id"="\d+"})
       */
       public function article ($id = 1)  {
         echo"Vous êtes sur la page concernant la référence de produit : ";
         return $this->render("base.html.twig", ["id" => $id]);
      }
      /**
       * @Route("/admin/article/add")
       */
       public function addArticle() {
         echo "Vue pour ajouter un article";
         return new Response();
       }
}
?>
