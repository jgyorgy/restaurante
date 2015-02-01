<?php

namespace App\RestauranteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Masa
 *
 * @ORM\Table(name="Mese")
 * @ORM\Entity(repositoryClass="App\RestauranteBundle\Entity\MasaRepository")
 */
class Mese {

  /**
   * @ORM\Id()
   * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="Mese")
   * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id", nullable=false)
   */
  protected $restaurant;

  /**
   * @ORM\Id()
   * @ORM\ManyToOne(targetEntity="TipuriMese", inversedBy="mese")
   * @ORM\JoinColumn(name="mese_id", referencedColumnName="id", nullable=false)
   */
  protected $tipMasa;

  /**
   * @var integer
   * @ORM\Column(name="mese_totale", type="integer")
   */
  private $numarMese;


    /**
     * Set numarMese
     *
     * @param integer $numarMese
     * @return Mese
     */
    public function setNumarMese($numarMese)
    {
        $this->numarMese = $numarMese;

        return $this;
    }

    /**
     * Get numarMese
     *
     * @return integer 
     */
    public function getNumarMese()
    {
        return $this->numarMese;
    }

    /**
     * Set restaurant
     *
     * @param \App\RestauranteBundle\Entity\Restaurant $restaurant
     * @return Mese
     */
    public function setRestaurant(\App\RestauranteBundle\Entity\Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    /**
     * Get restaurant
     *
     * @return \App\RestauranteBundle\Entity\Restaurant 
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * Set tipMasa
     *
     * @param \App\RestauranteBundle\Entity\TipuriMese $tipMasa
     * @return Mese
     */
    public function setTipMasa(\App\RestauranteBundle\Entity\TipuriMese $tipMasa)
    {
        $this->tipMasa = $tipMasa;

        return $this;
    }

    /**
     * Get tipMasa
     *
     * @return \App\RestauranteBundle\Entity\TipuriMese 
     */
    public function getTipMasa()
    {
        return $this->tipMasa;
    }
}
