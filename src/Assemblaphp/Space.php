<?php
/**
 * Created for Krush on 1/20/14.
 *
 * @author Kevin Nuut
 */

namespace Assemblaphp;

/**
 * Class Space
 *
 * @package Krush\Assembla
 */
class Space extends AbstractAssembla
{
    protected $object = 'spaces';

    /**
     * @param int $repordId
     * @param int $page
     * @param int $count
     */
    public function getTicketList($repordId = 0, $page = 1, $count = 1000)
    {
        /**
         * @var \stdClass $apiList
         */
        $apiList = $this->call(
            $this->object,
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
            $ticketObj = new Ticket($this->getConnection(), $ticket);

            if (!empty($ticketObj->assignedToId)) {
                $ticketObj->assignedTo = $userList[$ticketObj->assignedToId];
            } else {
                $ticketObj->assignedTo = new User($this->getConnection());
            }

            $outputList[$ticket->id] = $ticketObj;
        }

        return $outputList;
    }

    /**
     * @return array
     */
    public function getUserList()
    {
        /**
         * @var \stdClass $apiList
         */
        $apiList = $this->call(
            $this->object,
            'users'
        );

        $outputList = [];

        foreach ($apiList as $user) {

            $outputList[$user->id] = new User($this->getConnection(), $user);
        }

        return $outputList;
    }
} 