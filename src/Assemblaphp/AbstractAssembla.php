<?php
/**
 * Created for Krush on 1/20/14.
 *
 * @author Kevin Nuut
 */

namespace Assemblaphp;

/**
 * Class AbstractAssembla
 *
 * @package Assemblaphp
 */
class AbstractAssembla
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param Connection $connection
     * @param Array|\stdClass $config
     */
    public function __construct(Connection $connection, $config = null)
    {
        $this->setConnection($connection);
        $this->configure($config);
    }

    /**
     * @param $config
     */
    public function configure($config) {
        if (!empty($config)) {
            foreach ($config as $key => $value) {
                if ($key == 'custom_fields') {
                    foreach ($value as $customKey => $custom) {
                        $formatKey = $this->formatKey($customKey);
                        $this->$formatKey = $custom;
                    }
                } else {
                    $formatKey = $this->formatKey($key);
                    $this->$formatKey = $value;
                }
            }
        }
    }

    /**
     * @param $key
     *
     * @return string
     */
    private function formatKey($key) {
        return lcfirst(str_replace(' ', '', ucwords(strtolower(str_replace('_', ' ', $key)))));
    }

    /**
     * @param Connection $connection
     */
    public function setConnection(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param $method
     * @param $fields
     */
    public function call($object, $method, Array $query = [], Array $fields = [], $id = null) {
        $connection = $this->getConnection();
        $id = @($id ?: $connection->getSpaceId());

        $request = $object . '/' . $id . '/' . $method .
            (!empty($query) ? '/' . implode('/', $query) : '');

        return $connection->call($request, $fields);
    }

    /**
     * @param $name
     * @param $value
     *
     * @return bool
     */
    public function __set($name, $value)
    {
        return false;
    }
} 