<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Event;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;


class LoadEventData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $tanci = (new Event())
            ->setName('Танці в клюбі')
            ->setDescription('Веселі танцюльки! 10 грн вхід')
            ->setDatetime(new \DateTime('10.06.2015'))
            ->setIsFree(false)
            ->setLatitude(49.437764)
            ->setLongitude(27.005755)
            ->setPrice(10);

        $manager->persist($tanci);

        $amFoot = (new Event())
            ->setName('Американський футбол! Градіатори проти НеГладіаторів')
            ->setDescription('Матч чемпіонату всія русі з американського футболу!')
            ->setDatetime(new \DateTime('25.05.2015'))
            ->setIsFree(true)
            ->setLatitude(50.437764)
            ->setLongitude(25.005755);

        $manager->persist($amFoot);

        $dvij = (new Event())
            ->setName('Двіжуха')
            ->setDescription('Нереальна двіжуха за реальне бабло')
            ->setDatetime(new \DateTime('20.04.2015'))
            ->setIsFree(false)
            ->setLatitude(49.995672)
            ->setLongitude(25.679134)
            ->setPrice(50);

        $manager->persist($dvij);

        $manager->flush();
    }
}
