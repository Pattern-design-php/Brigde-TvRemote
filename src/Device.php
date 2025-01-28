<?php 

namespace Bridge;

interface Device{
    public function turnOn():string;
    public function turnOff():string;
}