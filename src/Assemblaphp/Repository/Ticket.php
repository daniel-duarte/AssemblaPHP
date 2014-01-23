<?php
/**
 * Created for No Reason on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Repository;

use Assemblaphp\Entity\EntityInterface;
use Assemblaphp\Entity\TicketComment;
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
     * @return Ticketarray()
     */
    public function findBy(Array $criteria, Array $orderBy = null, $limit = null, $offset = null)
    {
        $userRepo = $this->entityManager->getRepository(new User());
        $userList = $userRepo->findAll();

        $url = @($criteria['milestone'] ? '/milestone/' . $criteria['milestone'] : '');

        $apiList = $this->entityManager->call(
            'spaces',
            'tickets' . $url,
            array(),
            array(
                'report'   => @($criteria['report'] ?: null),
                'page'     => @($offset ?: $this::DEF_OFFSET),
                'per_page' => @($limit ?: $this::DEF_LIMIT),
                'ticket_status' => @($criteria['status'] ?: 'all')
            )
        );

        $outputList = array();

        foreach ($apiList as $ticket) {
            $ticketObj    = new \Assemblaphp\Entity\Ticket($ticket);

            $assignedToId = $ticketObj->getAssignedToId();

            if (!empty($assignedToId)) {
                $ticketObj->setAssignedTo($userList[$assignedToId]);
            } else {
                $ticketObj->setAssignedTo(new User());
            }

            $outputList[$ticketObj->getId()] = $ticketObj;
        }

        if (!empty($orderBy)) {
            foreach ($orderBy as $orderCol) {
                $outputList = $this->orderBy($outputList, $orderCol, -1);
            }
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
        $response = $this->entityManager->call('spaces', 'tickets', array(), array(), $id);
        return new \Assemblaphp\Entity\User($response);
    }
} 