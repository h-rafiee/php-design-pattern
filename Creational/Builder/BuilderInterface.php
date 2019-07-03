<?php

namespace PHPDesignPattern\Creational\Builder;

use PHPDesignPattern\Creational\Builder\Parts\Vehicle;

interface BuilderInterface {

    public function createVehicle();
    
    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}
