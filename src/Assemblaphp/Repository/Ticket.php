<?php
/**
 * Created for Krush on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Repository;

use Assemblaphp\Entity\User;

/**
 * Class Ticket
 *
 * @package Assemblaphp\Repository
 */
class Ticket extends RepositoryAbstract
{
    /**
     * @param array $criteria
     * @param array $orderBy
     * @param null  $limit
     * @param null  $offset
     *
     * @return Ticket[]
     */
    public function findBy(Array $criteria, Array $orderBy = null, $limit = null, $offset = null)
    {
        $userRepo = $this->entityManager->getRepository(new User());
        $userList = $userRepo->findAll();

        $apiList = $this->entityManager->call(
            'spaces',
            'tickets',
            [],
            [
                'report'   => @($criteria['report'] ?: null),
                'page'     => @($offset ?: $this::DEF_OFFSET),
                'per_page' => @($limit ?: $this::DEF_LIMIT)
            ]
        );

        $outputList = [];

        foreach ($apiList as $ticket) {
            $ticketObj    = new \Assemblaphp\Entity\Ticket($ticket);
            $assignedToId = $ticketObj->getAssignedToId();

            if (!empty($assignedToId)) {
                $ticketObj->assignedTo = $userList[$assignedToId];
            } else {
                $ticketObj->assignedTo = new User();
            }

            $outputList[$ticket->id] = $ticketObj;
        }

        return $outputList;
    }

} 