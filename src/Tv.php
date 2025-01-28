<?php

namespace Bridge;

class TV implements Device
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
