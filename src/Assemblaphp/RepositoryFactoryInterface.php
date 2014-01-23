<?php
/**
 * Created for Krush on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp;

use Assemblaphp\Entity\EntityInterface;

/**
 * Interface InterfaceFactory
 *
 * @package Assemblaphp\Repository
 */
interface RepositoryFactoryInterface
{
    /**
     * @param EntityManagerInterface $em
     * @param EntityInterface        $entity
     *
     * @return mixed
     */
    public function getRepository(EntityManagerInterface $em, EntityInterface $entity);
} 