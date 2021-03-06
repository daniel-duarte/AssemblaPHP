<?php
/**
 * Created for No Reason on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Repository;

use Assemblaphp\Entity\EntityInterface;

/**
 * Interface RepositoryInterface
 *
 * @package Assemblaphp\Repository
 */
interface RepositoryInterface
{
    const DEF_LIMIT  = 5000;
    const DEF_OFFSET = 1;

    /**
     * @param $id
     *
     * @return EntityInterface
     */
    public function find($id);

    /**
     * @return EntityInterfacearray()
     */
    public function findAll();

    /**
     * @param array $criteria
     * @param array $orderBy
     * @param null  $limit
     * @param null  $offset
     *
     * @return EntityInterfacearray()
     */
    public function findBy(Array $criteria, Array $orderBy = null, $limit = null, $offset = null);

    /**
     * @param array $criteria
     * @param array $orderBy
     *
     * @return EntityInterface
     */
    public function findOneBy(Array $criteria, Array $orderBy = null);
} 