<?php

namespace Aysheka\Socket\Event\IO;

use Aysheka\Socket\Event\SocketEvent;

class WriteEvent extends SocketEvent
{
    const EVENT_NAME = 'aysheka.socket.event.io.write';
}
