<?php

namespace PHPDesignPattern\Creational\Builder;

use PHPDesignPattern\Creational\Builder\Parts\Vehicle;

class Director {

    /**
     * @param BuilderInterface $builder
     * @return Vehicle
     */
    public function build(BuilderInterface $builder): Vehicle 
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}