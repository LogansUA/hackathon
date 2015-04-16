<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * OrganizerRepository
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class OrganizerRepository extends EntityRepository
{
    /**
     * @param integer $offset
     * @param integer $limit
     *
     * @return array
     */
    public function getAllOrganizers($offset = 0, $limit = null)
    {
        $qb = $this->createQueryBuilder('o');

        $qb
            ->setFirstResult($offset);

        if (null !== $limit) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()->getArrayResult();
    }
}
