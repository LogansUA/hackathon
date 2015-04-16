<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Organizer
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrganizerRepository")
 * @ORM\Table(name="organizers")
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 * @author Yuri Svatok <svatok13@gmail.com>
 */
class Organizer
{

    /**
     * @var int $id ID
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
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
     * @var string $phone Phone
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone;

    /**
     * @var string $email Email
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @var string $address Address
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $address;

    /**
     * @var Collection|EventOrg[] $evorgs
     *
     * @ORM\OneToMany(targetEntity="EventOrg", mappedBy="organizer", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="CASCADE")
     *
     * @Assert\Type(type="object")
     */
    private $evorgs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evorgs = new ArrayCollection();
    }

    /**
     * To string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName() ?: 'New Oranizer';
    }

    /**
     * Get evorgs
     *
     * @return EventOrg[]|Collection Evorgs
     */
    public function getEvorgs()
    {
        return $this->evorgs;
    }

    /**
     * Set evorgs
     *
     * @param EventOrg[]|Collection $evorgs evorgs
     *
     * @return $this
     */
    public function setEvorgs(Collection $evorgs)
    {
        foreach ($evorgs as $evorg) {
            $evorg->setOrganizer($this);
        }
        $this->evorgs = $evorgs;

        return $this;
    }


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
     * Get phone
     *
     * @return string Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get email
     *
     * @return string Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get address
     *
     * @return string Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}
