<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

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
            ->setFirstResult($offset);

        if (null !== $limit) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()->getArrayResult();
    }
}
