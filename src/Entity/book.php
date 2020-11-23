<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */

class book {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberpages;

    /**
     * @ORM\Column(type="date")
     */
    private $datepublication;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sale;

    /**
     * @ORM\Column(type="varchar", lenght="255")
     */
    private $resume;
}
