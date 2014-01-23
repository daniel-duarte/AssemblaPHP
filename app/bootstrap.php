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

require_once('../vendor/autoload.php');

$fileConfig    = require('config/config.php');
$connection    = new Connection($fileConfig['connection']);
$configuration = (new Configuration())
    ->setRepositoryFactory(new RepositoryFactory());

$em = new EntityManager($connection, $configuration);

$repo = $em->getRepository(new Ticket());

$tickets = $repo->findAll();

var_dump($tickets);
