<?php

namespace Bridge;

abstract class RemoteControl 
{
    protected $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    abstract  function turnOn();
    abstract  function turnOff();
}
