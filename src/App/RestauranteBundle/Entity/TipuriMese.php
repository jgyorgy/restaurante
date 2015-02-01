<?php

namespace App\RestauranteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Masa
 *
 * @ORM\Table(name="TipuriMese")
 * @ORM\Entity(repositoryClass="App\RestauranteBundle\Entity\MasaRepository")
 */
class TipuriMese {

  /**
   * @ORM\Id() @ORM\Column(type="integer")
   *  */
  protected $id;

  /**
   * ORM\Column(name="tip_masa", type="string", length=50, nullable=false)
   */
  protected $tipMasa;

  /** @ORM\OneToMany(targetEntity="mese", mappedBy="tipMasa") */
  protected $mese;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mese = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return TipuriMese
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add mese
     *
     * @param \App\RestauranteBundle\Entity\mese $mese
     * @return TipuriMese
     */
    public function addMese(\App\RestauranteBundle\Entity\mese $mese)
    {
        $this->mese[] = $mese;

        return $this;
    }

    /**
     * Remove mese
     *
     * @param \App\RestauranteBundle\Entity\mese $mese
     */
    public function removeMese(\App\RestauranteBundle\Entity\mese $mese)
    {
        $this->mese->removeElement($mese);
    }

    /**
     * Get mese
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMese()
    {
        return $this->mese;
    }
}
