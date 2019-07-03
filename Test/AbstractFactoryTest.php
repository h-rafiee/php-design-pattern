<?php
namespace PHPDesignPattern\Test;

use PHPDesignPattern\Creational\AbstractFactory\CsvParser;
use PHPDesignPattern\Creational\AbstractFactory\JsonParser;
use PHPDesignPattern\Creational\AbstractFactory\ParserFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        $this->assertInstanceOf(CsvParser::class, $parser);
    }

    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();
        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}
