<?php

namespace PHPDesignPattern\Test;

use PHPDesignPattern\Creational\Builder\Parts\Car;
use PHPDesignPattern\Creational\Builder\Parts\Truck;
use PHPDesignPattern\Creational\Builder\TruckBuilder;
use PHPDesignPattern\Creational\Builder\CarBuilder;
use PHPDesignPattern\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}