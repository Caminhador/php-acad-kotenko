<?php

interface Connectable
{
    const TEST = 1;

    public function connect();

    public static function reconnect();
}

interface Removable
{
    public function remove();
}

class USB implements Connectable, Removable
{
    public function connect()
    {
        echo 'Connecting...OK';
    }

    public function remove()
    {
        echo 'Removing...OK';
    }

    public static function reconnect()
    {
        // TODO: Implement reconnect() method.
    }
}

class PC
{
    private $port;

    public function __construct(Connectable $port)
    {
        $this->port = $port;
    }

    public function usePort()
    {
        $this->port->connect();
    }
}

class USBTypeC
{
    public function connect()
    {
        echo 'Type C connected';
    }
}

$usb = new USB();
$usbTypeC = new USBTypeC();

$pc = new PC($usb);
$pc->usePort();
