<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famillecomposant
 */
class Famillecomposant
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $idfamillecomposant;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Famillecomposant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get idfamillecomposant
     *
     * @return integer
     */
    public function getIdfamillecomposant()
    {
        return $this->idfamillecomposant;
    }
}

