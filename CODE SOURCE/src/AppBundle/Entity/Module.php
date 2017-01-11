<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 */
class Module
{
    /**
     * @var string
     */
    private $unite;

    /**
     * @var string
     */
    private $nature;

    /**
     * @var string
     */
    private $epaisseur;

    /**
     * @var float
     */
    private $longueur;

    /**
     * @var float
     */
    private $hauteur;

    /**
     * @var float
     */
    private $angleentrant;

    /**
     * @var float
     */
    private $anglesortant;

    /**
     * @var integer
     */
    private $idmodule;

    /**
     * @var \AppBundle\Entity\Gamme
     */
    private $gammegamme;


    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Module
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set nature
     *
     * @param string $nature
     *
     * @return Module
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set epaisseur
     *
     * @param string $epaisseur
     *
     * @return Module
     */
    public function setEpaisseur($epaisseur)
    {
        $this->epaisseur = $epaisseur;

        return $this;
    }

    /**
     * Get epaisseur
     *
     * @return string
     */
    public function getEpaisseur()
    {
        return $this->epaisseur;
    }

    /**
     * Set longueur
     *
     * @param float $longueur
     *
     * @return Module
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return float
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set hauteur
     *
     * @param float $hauteur
     *
     * @return Module
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return float
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set angleentrant
     *
     * @param float $angleentrant
     *
     * @return Module
     */
    public function setAngleentrant($angleentrant)
    {
        $this->angleentrant = $angleentrant;

        return $this;
    }

    /**
     * Get angleentrant
     *
     * @return float
     */
    public function getAngleentrant()
    {
        return $this->angleentrant;
    }

    /**
     * Set anglesortant
     *
     * @param float $anglesortant
     *
     * @return Module
     */
    public function setAnglesortant($anglesortant)
    {
        $this->anglesortant = $anglesortant;

        return $this;
    }

    /**
     * Get anglesortant
     *
     * @return float
     */
    public function getAnglesortant()
    {
        return $this->anglesortant;
    }

    /**
     * Set idmodule
     *
     * @param integer $idmodule
     *
     * @return Module
     */
    public function setIdmodule($idmodule)
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    /**
     * Get idmodule
     *
     * @return integer
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set gammegamme
     *
     * @param \AppBundle\Entity\Gamme $gammegamme
     *
     * @return Module
     */
    public function setGammegamme(\AppBundle\Entity\Gamme $gammegamme)
    {
        $this->gammegamme = $gammegamme;

        return $this;
    }

    /**
     * Get gammegamme
     *
     * @return \AppBundle\Entity\Gamme
     */
    public function getGammegamme()
    {
        return $this->gammegamme;
    }
}

