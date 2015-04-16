<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Organizer;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;



class LoadOrganizerData extends AbstractFixture {
    public function load(ObjectManager $manager)
    {
        $coach = (new Organizer())
            ->setName('Coach')
            ->setDescription('Тренер з американського футболу')
            ->setAddress('Прибузька 46')
            ->setPhone('+38096887975');

        $manager->persist($coach);

        $dance = (new Organizer())
            ->setName('Петрик Танцюрист')
            ->setDescription('Петрик, який любить танці')
            ->setPhone('+380978643126');

        $manager->persist($dance);

        $manager->flush();
    }
}
