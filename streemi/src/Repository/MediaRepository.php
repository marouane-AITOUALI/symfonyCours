<?php

namespace App\Repository;

use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Media>
 */
class MediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Media::class);
    }

    public function findPopular(int $maxResults): Array
    {
        // Trier les médias par le nombre de vues, par exemple
        return $this->createQueryBuilder('m')
            ->leftJoin('m.watchHistories', 'w') // Assure-toi que la relation est bien définie
            ->groupBy('m.id')
            ->orderBy('COUNT(w.id)', 'DESC') // On compte le nombre d'entrées dans `watchHistories`
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getResult();
    }

}
