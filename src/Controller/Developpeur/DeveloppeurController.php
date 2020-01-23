<?php
/**
 * @author <julienrajerison5@gmail.com>.
 */

namespace App\Controller\Developpeur;

use App\Controller\AbstractBaseController;
use App\CustomInterface\ControllerInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DeveloppeurController.
 */
class DeveloppeurController extends AbstractBaseController implements ControllerInterface
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('base.html.twig',[]);
    }
    /**
     * Save data
     *
     * @return mixed
     */
    public function save()
    {
        // TODO: Implement save() method.
    }

    /**
     * Remove object data
     *
     * @return mixed
     */
    public function remove()
    {
        // TODO: Implement remove() method.
    }

    /**
     * Search data
     *
     * @return mixed
     */
    public function search()
    {
        // TODO: Implement search() method.
    }
}