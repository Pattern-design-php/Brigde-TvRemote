<?php

namespace Bridge;

class TVremote extends RemoteControl
{
    public function turnOn(): string
    {
        return "TV is on";
    }

    public function turnOff(): string
    {
        return "TV is off";
    }
}
