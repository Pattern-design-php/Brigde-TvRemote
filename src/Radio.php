<?php

namespace Bridge;

class Radio implements Device
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
