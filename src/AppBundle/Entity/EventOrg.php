<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EventOrg
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventOrgRepository")
 * @ORM\Table(name="ev_org")
 *
 * @author Yuri Svatok <svatok13@gmail.com>
 */
class EventOrg
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
     * @var Event $event Event
     *
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="evorgs")
     * @ORM\JoinColumn(name="event", referencedColumnName="id")
     *
     * @Assert\NotBlank()
     */
    private $event;

    /**
     * @var Organizer $organizer
     *
     * @ORM\ManyToOne(targetEntity="Organizer", inversedBy="evorgs")
     * @ORM\JoinColumn(name="organizer", referencedColumnName="id")
     *
     * @Assert\NotBlank()
     */
    private $organizer;

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
     * Get event
     *
     * @return Event Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set event
     *
     * @param Event $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get organizer
     *
     * @return Organizer Organizer
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Set organizer
     *
     * @param Organizer $organizer organizer
     *
     * @return $this
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;

        return $this;
    }

}
