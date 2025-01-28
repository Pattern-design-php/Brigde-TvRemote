<?php

namespace Bridge;

class BasicRemoteControl  extends RemoteControl
{
    public function __construct(Device $device)
    {
        parent::__construct($device);
    }

    function turnOn()
    {
        $this->device->turnOn();
    }
    function turnOff()
    {
        $this->device->turnOff();
    }
}
