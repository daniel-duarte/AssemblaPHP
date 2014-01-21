<?php

namespace Example;

use Assemblaphp\Connection;
use Assemblaphp\Space;
use Assemblaphp\User;

/**
 * Class Example
 * @package Example
 */
class Example
{
    public function getTicketList()
    {
        $space = new Space(new Connection($this->config()));

        $this->view['ticketList'] = $space->getTicketList('u1056033');

        return $this->renderOutput('template_simple');
    }
}