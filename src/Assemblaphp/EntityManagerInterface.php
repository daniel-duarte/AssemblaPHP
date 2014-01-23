<?php
/**
 * Created for Krush on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp;

use Assemblaphp\Entity\EntityInterface;
use Assemblaphp\Repository\RepositoryInterface;

/**
 * Interface EntityManagerInterface
 *
 * @package Assemblaphp
 */
interface EntityManagerInterface
{
    /**
     * @param EntityInterface $entity
     *
     * @return RepositoryInterface
     */
    public function getRepository(EntityInterface $entity);

    /**
     * @return Configuration
     */
    public function getConfiguration();

    /**
     * @return Connection
     */
    public function getConnection();

    /**
     * @param       $object
     * @param       $method
     * @param array $query
     * @param array $fields
     * @param null  $id
     *
     * @return \StdClass
     */
    public function call($object, $method, Array $query = null, Array $fields = null, $id = null);

} 