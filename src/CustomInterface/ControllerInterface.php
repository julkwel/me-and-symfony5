<?php
/**
 * @author <Bocasay>.
 */

namespace App\CustomInterface;

/**
 * Class ControllerInterface.
 */
interface ControllerInterface
{
    /**
     * Save data
     *
     * @return mixed
     */
    public function save();

    /**
     * Search data
     *
     * @return mixed
     */
    public function search();

    /**
     * Remove object data
     *
     * @return mixed
     */
    public function remove();
}