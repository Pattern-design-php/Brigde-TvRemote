<?php

namespace Bridge;

class RadioRemote extends RemoteControl
{
    public function turnOn(): string
    {
        return "Radio is on";
    }

    public function turnOff(): string
    {
        return "Radio is off";
    }
}
