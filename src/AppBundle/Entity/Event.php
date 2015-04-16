<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Event
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 * @ORM\Table(name="events")
 */
class Event
{
    /**
     * @var int $id ID
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name Name
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string $description Description
     *
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @var DateTime $datetime DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datetime;

    /**
     * @var float $latitude Latitude
     *
     * @ORM\Column(type="decimal", precision=18, scale=15, nullable=true)
     */
    private $latitude;

    /**
     * @var float $longitude Longitude
     *
     * @ORM\Column(type="decimal", precision=18, scale=15, nullable=true)
     */
    private $longitude;

    /**
     * @var int $price Price
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

    /**
     * @var boolean $isFree IsFree
     *
     * @ORM\Column(type="boolean")
     */
    private $free = true;

    /**
     * Get id
     *
     * @return int Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get name
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get description
     *
     * @return string Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return DateTime Datetime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set datetime
     *
     * @param DateTime $datetime datetime
     *
     * @return $this
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float Latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float Longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get price
     *
     * @return int Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set price
     *
     * @param int $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get free
     *
     * @return boolean Free
     */
    public function isFree()
    {
        return $this->free;
    }

    /**
     * Set free
     *
     * @param boolean $free free
     *
     * @return $this
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }
}
