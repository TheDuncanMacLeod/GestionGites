<?php

namespace App\Repository;

use App\Entity\Gite;
use App\Entity\GiteSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gite[]    findAll()
 * @method Gite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gite::class);
    }

    /**
     * @return Gite[] Returns an array of Gite objects
     */

    public function findLatestGite()
    {
        return $this->createQueryBuilder('g')
            ->orderBy('g.Created_at', 'DESC')
            ->setMaxResults(9)
            ->getQuery()
            ->getResult();
    }


    public function findAllGiteSearch(GiteSearch $search): array
    {
        $query = $this->createQueryBuilder('g');

        if ($search->getMinSurface()) {
            $query = $query
                ->andWhere('g.Surface > :minSurface')
                ->setParameter('minSurface', $search->getMinSurface());
        }

        if ($search->getMaxBedrooms()) {
            $query = $query
                ->andWhere('g.Bedrooms < :maxBedrooms')
                ->setParameter('maxBedrooms', $search->getMaxBedrooms());
        }
        if ($search->getfindCity()) {
            $query = $query
                ->andWhere('g.City = :findCity')
                ->setParameter('findCity', $search->getfindCity());
        }
        if ($search->getAcceptAnimals()) {
            $query = $query
                ->andWhere('g.Animals = :AcceptAnimals')
                ->setParameter('AcceptAnimals', $search->getAcceptAnimals());
        }

        return $query->getQuery()->getResult();
    }


    /*
    public function findOneBySomeField($value): ?Gite
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
