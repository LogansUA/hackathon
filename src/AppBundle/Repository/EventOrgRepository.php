<?php


namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Event;
use AppBundle\Entity\Organizer;

class EventOrgRepository extends EntityRepository
{
    /**
     * @param Event $event
     *
     * @return Organizer
     */
    public function getOrganizer(Event $event)
    {
        $qb = $this->createQueryBuilder('e');

        $qb
            ->join('e.organizer', 'o')
            ->select('o.name AS orgName')
            ->addSelect('o.id')
            ->where($qb->expr()->eq('e.event', ':event'))
            ->setParameter('event', $event->getId());

        return $qb->getQuery()->getOneOrNullResult();
    }
}
