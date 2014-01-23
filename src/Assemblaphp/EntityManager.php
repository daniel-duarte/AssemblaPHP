<?php
/**
 * Created for No Reason on 1/20/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp;

use Assemblaphp\Entity\EntityInterface;
use Assemblaphp\Repository\RepositoryInterface;

/**
 * Class EntityManager
 *
 * @package Assemblaphp
 */
class EntityManager implements EntityManagerInterface
{
    protected $repository;

    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @param Connection    $connection
     * @param Configuration $config
     */
    public function __construct(Connection $connection, Configuration $configuration)
    {
        $this->connection    = $connection;
        $this->configuration = $configuration;
    }

    /**
     * @param EntityInterface $entity
     *
     * @return RepositoryInterface
     */
    public function getRepository(EntityInterface $entity)
    {
        return $this->configuration->getRepositoryFactory()->getRepository($this, $entity);
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param       $object
     * @param       $method
     * @param array $query
     * @param array $fields
     * @param null  $id
     *
     * @return bool|mixed
     */
    public function call($object, $method, Array $query = null, Array $fields = [], $id = null)
    {
        $connection = $this->getConnection();
        $id = @($id ?: $connection->getSpaceId());

        $request = $object . '/' . $id . '/' . $method .
            (!empty($query) ? '/' . implode('/', $query) : '');

        return $connection->call($request, $fields);
    }
} 