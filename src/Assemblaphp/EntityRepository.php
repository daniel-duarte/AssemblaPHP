<?php
/**
 * Created for No Reason on 1/21/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp;

/**
 * Class EntityRepository
 *
 * @package Assemblaphp
 */
class EntityRepository 
{
    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param int    $page
     * @param int    $count
     * @param string $dueDateOrder
     *
     * @return array
     */
    public function getMilestoneList($page = 1, $count = 1000, $dueDateOrder = 'DESC')
    {
        /**
         * @var \stdClass $apiList
         */
        $apiList = $this->call(
            'spaces',
            'tickets',
            [],
            [
                'report'   => $repordId,
                'page'     => $page,
                'per_page' => $count
            ]
        );

        $outputList = [];
        $userList   = $this->getUserList();

        foreach ($apiList as $ticket) {
            $ticketObj    = new Ticket($this->getConnection(), $ticket);
            $assignedToId = $ticketObj->getAssignedToId();

            if (!empty($assignedToId)) {
                $ticketObj->assignedTo = $userList[$assignedToId];
            } else {
                $ticketObj->assignedTo = new User($this->getConnection());
            }

            $outputList[$ticket->id] = $ticketObj;
        }

        return $outputList;

    }
} 