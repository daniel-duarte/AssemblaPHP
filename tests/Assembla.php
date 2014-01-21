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
    
    /**
     * @return array
     */
    public function config()
    {
        return [
            'apiUrl' => 'https://api.assembla.com/',
            'apiKey' => 'eb13d041c3b1f6a605b4',
            'apiSecret' => '44174ae401f092c01c41dd422f33610f46e13d19',
            'spaceId' => 'krush'
        ];
    }
}