<?php
/**
 * Created for No Reason on 1/22/14.
 *
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Repository;

/**
 * Class TicketComment
 *
 * @package Assemblaphp\Repository
 */
class TicketComment extends RepositoryAbstract
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
        $ticket = @($criteria['ticket'] ?: null);
        $filter = @($criteria['filter'] ?: false);

        $apiList = $this->entityManager->call(
            'spaces',
            'tickets/' . $ticket . '/ticket_comments',
            array(),
            array(
                'page'     => @($offset ?: $this::DEF_OFFSET),
                'per_page' => @($limit ?: $this::DEF_LIMIT)
            )
        );

        $outputList = array();

        foreach ($apiList as $ticketComment) {
            $ticketCommentObj    = new \Assemblaphp\Entity\TicketComment($ticketComment);
            $comment = $ticketCommentObj->getComment();

            if ($filter) {
                if (empty($comment) || substr($comment, 0, 3) == '(In') {
                    continue;
                }
            }

            $comment = preg_replace('/\(In.*?\)( [a-z]+ #\d+)?/', 'COMMIT: ', $comment);

            if (empty($comment)) {
                continue;
            }

            $ticketCommentObj->setComment($comment);


            $outputList[$ticketCommentObj->getId()] = $ticketCommentObj;
        }

        if (!empty($orderBy)) {
            foreach ($orderBy as $orderCol) {
                $outputList = $this->orderBy($outputList, $orderCol, -1);
            }
        }

        return $outputList;
    }
} 