<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Event;

/**
 * EventRepository
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class EventRepository extends EntityRepository
{
    /**
     * @param integer $offset
     * @param integer $limit
     *
     * @return array
     */
    public function getAllEvents($offset = 0, $limit = null)
    {
        $qb = $this->createQueryBuilder('e');

        $qb
            ->select('e.name')
            ->addSelect('e.id')
            ->addSelect('e.datetime')
            ->addSelect('e.price')
            ->setFirstResult($offset);

        if (null !== $limit) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * @param integer $id
     *
     * @return Event
     */
    public function findEventById($id)
    {
        $qb = $this->createQueryBuilder('e');
        $qb
            ->select('e')
            ->where($qb->expr()->eq('e.id', ':id'))
            ->setParameter('id', $id);
        return $qb->getQuery()->getOneOrNullResult();
    }
}
