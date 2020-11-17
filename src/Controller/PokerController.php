<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController {
    /**
     * @Route("/plus18", name="plus18")
     */

    public function plus18 (Request $request){
        $age = $request -> query -> get('age');

        if ($age<18){
            $message = new Response('<h1>AZY bouge de là TCHIIIIIIP</h1>');
        } else {

            $prenom = $request -> query -> get('prenom');
            $nom = $request -> query -> get('nom');
            $message = new Response( '<p> Bonjour ' . $prenom . ' ' . $nom . ' </p> ');
        }
        return $message;
    }

    /**
     * @Route("/article/{id}", name="article")
     */

    public function articlasse($id) {

        $articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];
        $response = new Response($articles[$id]);
        return $response;
    }

    /**
     * @Route ("/", name="home")
     */
    public function home (){
        return new Response("page d'accueil");
    }

    /**
     * @Route ("/formProcess", name="formProcess")
     */

    public function ProcessForm (){
        $isFormSubmitted = false;

        if (!$isFormSubmitted) {
            $message = new Response ("Merci de bien vouloir vous magner 
            le cul de REMPLIR CE FORMULAIRE A LA CON !");
        } else {
            $message = $this ->redirectToRoute("home");
        }
        return $message;
    }
}