<?php
/**
 * @author <julienrajerison5@gmail.com>.
 */

namespace App\Repository;

use App\Entity\Developpeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Developpeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Developpeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Developpeur[]    findAll()
 * @method Developpeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeveloppeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Developpeur::class);
    }
}
