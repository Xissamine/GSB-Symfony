<?php

namespace MP\GsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament")
 * @ORM\Entity(repositoryClass="MP\GsbBundle\Repository\MedicamentRepository")
 */
class Medicament
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCommercial", type="string", length=255, unique=true)
     */
    private $nomCommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Composition", type="string", length=255)
     */
    private $composition;

    /**
     * @var string
     *
     * @ORM\Column(name="Effet", type="string", length=255)
     */
    private $effet;

    /**
     * @var string
     *
     * @ORM\Column(name="ContreIndication", type="string", length=255)
     */
    private $contreIndication;

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="decimal", precision=10, scale=1)
     */
    private $prix;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomCommercial
     *
     * @param string $nomCommercial
     *
     * @return Medicament
     */
    public function setNomCommercial($nomCommercial)
    {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    /**
     * Get nomCommercial
     *
     * @return string
     */
    public function getNomCommercial()
    {
        return $this->nomCommercial;
    }

    /**
     * Set composition
     *
     * @param string $composition
     *
     * @return Medicament
     */
    public function setComposition($composition)
    {
        $this->composition = $composition;

        return $this;
    }

    /**
     * Get composition
     *
     * @return string
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Set effet
     *
     * @param string $effet
     *
     * @return Medicament
     */
    public function setEffet($effet)
    {
        $this->effet = $effet;

        return $this;
    }

    /**
     * Get effet
     *
     * @return string
     */
    public function getEffet()
    {
        return $this->effet;
    }

    /**
     * Set contreIndication
     *
     * @param string $contreIndication
     *
     * @return Medicament
     */
    public function setContreIndication($contreIndication)
    {
        $this->contreIndication = $contreIndication;

        return $this;
    }

    /**
     * Get contreIndication
     *
     * @return string
     */
    public function getContreIndication()
    {
        return $this->contreIndication;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Medicament
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }
}

