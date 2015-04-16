<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\EventOrg;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;


class LoadEventOrgData extends AbstractFixture implements DependentFixtureInterface{

    /**
    * {@inheritdoc}
    */
    public function getDependencies()
    {
        return [
            'AppBundle\DataFixtures\ORM\LoadEventData',
            'AppBundle\DataFixtures\ORM\LoadOrganizerData'
        ];
    }

    public function load(ObjectManager $manager)
    {
        /**
         * @var \AppBundle\Entity\Event $eventTanci
         * @var \AppBundle\Entity\Event $eventDvij
         * @var \AppBundle\Entity\Event $eventAmFoot
         * @var \AppBundle\Entity\Organizer $organizerCoach
         * @var \AppBundle\Entity\Organizer $organizerPetya
         */
        $eventTanci     = $this->getReference('tanci');
        $eventDvij      = $this->getReference('dvij');
        $eventAmFoot = $this->getReference('amFoot');
        $organizerCoach   = $this->getReference('coach');
        $organizerPetya = $this->getReference('dance');

        $ev1 = (new EventOrg())
            ->setEvent($eventTanci)
            ->setOrganizer($organizerPetya);

        $manager->persist($ev1);

        $ev2 = (new EventOrg())
            ->setEvent($eventDvij)
            ->setOrganizer($organizerPetya);

        $manager->persist($ev2);

        $ev3 = (new EventOrg())
            ->setEvent($eventAmFoot)
            ->setOrganizer($organizerCoach);

        $manager->persist($ev3);

        $manager->flush();
    }
}
