<?php
/**
 * Created for Krush on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp;

use Assemblaphp\Repository\RepositoryInterface;

/**
 * Class Configuration
 *
 * @package Assemblaphp
 */
class Configuration 
{
    /**
     * @var RepositoryFactoryInterface
     */
    private $repositoryFactory;

    /**
     * @param \Assemblaphp\RepositoryFactoryInterface $repositoryFactory
     */
    public function setRepositoryFactory($repositoryFactory)
    {
        $this->repositoryFactory = $repositoryFactory;
        return $this;
    }

    /**
     * @return \Assemblaphp\RepositoryFactoryInterface
     */
    public function getRepositoryFactory()
    {
        return $this->repositoryFactory;
    }


} 