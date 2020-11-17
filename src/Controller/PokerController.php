<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController{
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
        die;
    }

    public function articleShow(Request $request) {

        $idArticle = $request -> query -> get('id');
        $articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];
        $response = new Response('<h3>'.$articles[$idArticle].'</h3>');
        return $response;
    }
}
?>