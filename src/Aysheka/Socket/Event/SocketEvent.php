<?php
namespace Aysheka\Socket\Event;

use Symfony\Component\EventDispatcher\Event;
use Aysheka\Socket\Socket;


class SocketEvent extends Event
{
    const EVENT_NAME = 'socket.event';
    protected $socket;
    protected $data;

    function __construct(Socket $socket, $data = null)
    {
        $this->socket = $socket;
        $this->data   = $data;
    }

    function getSocket()
    {
        return $this->socket;
    }

    function getData()
    {
        return $this->data;
    }

    public static function getEventName()
    {
        return self::EVENT_NAME;
    }
}
