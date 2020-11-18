<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConditionController extends AbstractController {

    /**
     * @Route ("/condition", name="condition_controller")
     */

    public function ConditionController () {
        $profile = [
            "firstname" => "Noel",
            "name" => "Flantier",
            "age" => 40,
            "job" => "secret agent",
            "active" => false
        ];

            return $this->render('article.html.twig',
                [
                    'profile' => $profile
                ]);
    }

    /**
     * @Route ("/missions", name="missions")
     */

    public function missions() {
        $missions = [
            'Brésil',
            'Egypte',
            'Afrique Noire'];

        return $this->render('missions.html.twig',
        [
            'missions' => $missions
        ]);
    }

    /**
     * @Route ("/skills", name="skills")
     */

    public function skills() {
        $skills = [
            'pas doué',
            'ignorant',
            'vantard',
            'macho'
        ];

        return $this->render('missions.html.twig',
        [
            'skills' => $skills
        ]);
    }
}