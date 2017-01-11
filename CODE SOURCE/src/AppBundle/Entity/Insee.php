<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Insee
 */
class Insee
{
    /**
     * @var string
     */
    private $nomville;

    /**
     * @var string
     */
    private $codepostal;

    /**
     * @var integer
     */
    private $idinsee;


    /**
     * Set nomville
     *
     * @param string $nomville
     *
     * @return Insee
     */
    public function setNomville($nomville)
    {
        $this->nomville = $nomville;

        return $this;
    }

    /**
     * Get nomville
     *
     * @return string
     */
    public function getNomville()
    {
        return $this->nomville;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Insee
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Get idinsee
     *
     * @return integer
     */
    public function getIdinsee()
    {
        return $this->idinsee;
    }
}

