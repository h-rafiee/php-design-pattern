<?php
namespace PHPDesignPattern\Creational\AbstractFactory;

interface Parser {
    public function parse(string $input): array;
}