<?php
/**
 * Created for Krush on 1/22/14.
 * 
 * @author Kevin Nuut <kevin@krushcom.com>
 */

namespace Assemblaphp\Repository;


use Assemblaphp\Entity\EntityInterface;

class Milestone extends RepositoryAbstract
{
    /**
     * @param array $criteria
     * @param array $orderBy
     * @param null  $limit
     * @param null  $offset
     *
     * @return array|\Assemblaphp\Entity\EntityInterfacearray()
     */
    public function findBy(Array $criteria, Array $orderBy = null, $limit = null, $offset = null)
    {
        $status = @($criteria['status'] ?: 'all');

        /**
         * @var \stdClass $apiList
         */
        $apiList = $this->entityManager->call(
            'spaces',
            'milestones/' . $status,
            array(),
            array(
                 'due_date_order' => @($criteria['due_date_order'] ?: 'DESC'),
                 'page'           => @($offset ?: $this::DEF_OFFSET),
                 'per_page'       => @($limit ?: $this::DEF_LIMIT)
            )
        );

        $outputList = array();

        foreach ($apiList as $milestone) {
            $ticketObj    = new \Assemblaphp\Entity\Milestone($milestone);

            $outputList[$milestone['id']] = $ticketObj;
        }

        if (!empty($orderBy)) {
            foreach ($orderBy as $orderCol) {
                $outputList = $this->orderBy($outputList, $orderCol, 1);
            }
        }

        return $outputList;
    }

} 