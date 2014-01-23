<?php
/**
 * Created for No Reason on 1/22/14.
 *
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Repository;

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
     * @return User[]
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

        $outputList = [];

        foreach ($apiList as $user) {
            $outputList[$user->id] = new \Assemblaphp\Entity\User($user);
        }

        return $outputList;
    }

} 