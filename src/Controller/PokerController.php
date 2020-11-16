<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PokerController{
    /**
     * @Route("/plus18", name="plus18")
     */

    public function plus18 (Request $request){
        $age = $request -> query -> get('age');

        if ($age<18){
            $message = "AZY bouge de là TCHIIIIIIP";
        } else {

            $prenom = $request -> query -> get('prenom');
            $nom = $request -> query -> get('nom');
            $message = "Bienvenu $prenom $nom, tou peux faire cé qué tou veux acqui !";
        }
        echo $message;
        die;
    }
}
?>