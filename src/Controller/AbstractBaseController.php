<?php
/**
 * @author <julienrajerison5@gmail.com>.
 */

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class AbstractBaseController.
 */
abstract class AbstractBaseController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    protected $manager;

    /**
     * AbstractBaseController constructor.
     *
     * @param \Doctrine\ORM\EntityManagerInterface $manager
     */
    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }
}