<?php

namespace App\RestauranteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\RestauranteBundle\Entity\NrMese;

/**
 * Restaurant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\RestauranteBundle\Entity\RestaurantRepository")
 */
class Restaurant {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var integer
   *
   * @ORM\Column(name="name", type="string")
   */
  private $name;

  /**
   * @var integer
   *
   * @ORM\Column(name="address", type="string")
   */
  private $address;

  /**
   * @var integer
   *
   * @ORM\Column(name="thumbnail", type="string")
   */
  private $thumbnail;

  /**
   *
   * @var Doctors
   * @ORM\OneToMany(targetEntity="Mese", mappedBy="restaurantID")
   * @ORM\JoinTable(name="Mese")
   */
  private $mese;

  public function __construct() {
    $this->mese = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set name
   *
   * @param string $name
   * @return Restaurant
   */
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set address
   *
   * @param string $address
   * @return Restaurant
   */
  public function setAddress($address) {
    $this->address = $address;

    return $this;
  }

  /**
   * Get address
   *
   * @return string
   */
  public function getAddress() {
    return $this->address;
  }

  /**
   * Set thumbnail
   *
   * @param string $thumbnail
   * @return Restaurant
   */
  public function setThumbnail($thumbnail) {
    $this->thumbnail = $thumbnail;

    return $this;
  }

  /**
   * Get thumbnail
   *
   * @return string
   */
  public function getThumbnail() {
    return $this->thumbnail;
  }

  /**
   * Add mese
   *
   * @param \App\RestauranteBundle\Entity\NrMese $mese
   * @return Restaurant
   */
  public function addMese(\App\RestauranteBundle\Entity\NrMese $mese) {
    $this->mese[] = $mese;

    return $this;
  }

  /**
   * Remove mese
   *
   * @param \App\RestauranteBundle\Entity\NrMese $mese
   */
  public function removeMese(\App\RestauranteBundle\Entity\NrMese $mese) {
    $this->mese->removeElement($mese);
  }

  /**
   * Get mese
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getMese() {
    return $this->mese;
  }

}
