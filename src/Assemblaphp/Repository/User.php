<?php
/**
 * Created for No Reason on 1/22/14.
 *
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Repository;

use Assemblaphp\Entity\EntityInterface;

/**
 * Class Ticket
 *
 * @package Assemblaphp\Repository
 */
class User extends RepositoryAbstract
{
    /**
     * @param array $criteria
     * @param array $orderBy
     * @param null  $limit
     * @param null  $offset
     *
     * @return Userarray()
     */
    public function findBy(Array $criteria, Array $orderBy = null, $limit = null, $offset = null)
    {
        /**
         * @var \stdClass $apiList
         */
        $apiList = $this->entityManager->call(
            'spaces',
            'users'
        );

        $outputList = array();

        foreach ($apiList as $user) {
            $outputList[$user['id']] = new \Assemblaphp\Entity\User($user);
        }

        return $outputList;
    }

    /**
     * @param $id
     *
     * @return EntityInterface
     */
    public function find($id)
    {
        $response = $this->entityManager->call('users', '', array(), array(), $id);
        return new \Assemblaphp\Entity\User($response);
    }

}