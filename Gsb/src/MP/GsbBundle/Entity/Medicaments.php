<?php

namespace MP\GsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicaments
 *
 * @ORM\Table(name="medicaments")
 * @ORM\Entity(repositoryClass="MP\GsbBundle\Repository\MedicamentsRepository")
 */
class Medicaments
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
     * @ORM\Column(name="NomCommercial", type="string", length=255)
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
     * @ORM\Column(name="ContreIndic", type="string", length=255)
     */
    private $contreIndic;

    /**
     * @var string
     *
     * @ORM\Column(name="PrixEchantillon", type="decimal", precision=10, scale=3)
     */
    private $prixEchantillon;



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
     * @return Medicaments
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
     * @return Medicaments
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
     * @return Medicaments
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
     * Set contreIndic
     *
     * @param string $contreIndic
     *
     * @return Medicaments
     */
    public function setContreIndic($contreIndic)
    {
        $this->contreIndic = $contreIndic;

        return $this;
    }

    /**
     * Get contreIndic
     *
     * @return string
     */
    public function getContreIndic()
    {
        return $this->contreIndic;
    }

    /**
     * Set prixEchantillon
     *
     * @param string $prixEchantillon
     *
     * @return Medicaments
     */
    public function setPrixEchantillon($prixEchantillon)
    {
        $this->prixEchantillon = $prixEchantillon;

        return $this;
    }

    /**
     * Get prixEchantillon
     *
     * @return string
     */
    public function getPrixEchantillon()
    {
        return $this->prixEchantillon;
    }

}
