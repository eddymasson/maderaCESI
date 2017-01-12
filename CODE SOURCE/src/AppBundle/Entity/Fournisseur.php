<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 * @ORM\Table(name="Fournisseur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FournisseurRepository")
 */
class Fournisseur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFournisseur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idfournisseur;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Fournisseur
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
     * Set description
     *
     * @param string $description
     *
     * @return Fournisseur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idfournisseur
     *
     * @return integer
     */
    public function getIdfournisseur()
    {
        return $this->idfournisseur;
    }
}

