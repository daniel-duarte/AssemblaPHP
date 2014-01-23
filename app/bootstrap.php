<?php
/**
 * Created for No Reason on 1/22/14.
 *
 * @author Kevin Nuut <kevin@krushcom.com>
 */

use Assemblaphp\Connection;
use Assemblaphp\EntityManager;
use Assemblaphp\Configuration;
use Assemblaphp\Entity\Ticket;
use Assemblaphp\RepositoryFactory;
use Assemblaphp\View;

require_once('../vendor/autoload.php');

$fileConfig    = require('config/config.php');
$connection    = new Connection($fileConfig['connection']);
$configuration = new Configuration();
$configuration->setRepositoryFactory(new RepositoryFactory());

$em = new EntityManager($connection, $configuration);

$action = @($_GET['action'] ? : 'index');

switch ($action) {
    case 'index':
        $view = new View(__DIR__ . '/view/index.phtml');

        $milestoneId   = @($_GET['milestone'] ? : '2705133');
        $milestoneList = $em->getRepository(new \Assemblaphp\Entity\Milestone())->findBy(array('status' => 'upcoming'));

        $ticketRepo = $em->getRepository(new Ticket());
        $ticketList = $ticketRepo->findBy(array('milestone' => $milestoneId, 'status' => 'active'), array('status'));

        $view->milestoneList = $milestoneList;
        $view->milestoneId   = $milestoneId;
        $view->ticketList    = $ticketList;
        break;
    case 'comment':
        $view = new View(__DIR__ . '/view/comment.phtml');

        $ticket = @($_GET['ticket'] ? : null);

        if ($ticket) {
            $commentRepo = $em->getRepository(new \Assemblaphp\Entity\TicketComment());
            $commentList = $commentRepo->findBy(array('ticket' => $ticket, 'filter' => true), array('updatedAt'));

            $view->commentList = $commentList;
        }

}

$view->render();