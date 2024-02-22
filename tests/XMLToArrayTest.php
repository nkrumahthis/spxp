<?php

use PHPUnit\Framework\TestCase;

use Nkrumahthis\XMLToArray\XMLToArray;

class XMLToArrayTest extends TestCase
{
    public function testParseSimpleXML()
    {
        $xmlString = '<?xml version="1.0" encoding="UTF-8"?>
            <root>
                <name>John Doe</name>
                <age>30</age>
                <city>New York</city>
            </root>';

        $expectedArray = [
            'root' => [
                'name' => 'John Doe',
                'age' => '30',
                'city' => 'New York'
            ]
        ];

        $resultArray = XMLToArray::parse($xmlString);

        $this->assertEquals($expectedArray, $resultArray);
    }

    public function testParseEmptyXML()
    {
        $xmlString = '<?xml version="1.0" encoding="UTF-8"?>
            <root></root>';

        $expectedArray = ['root' => null];

        $resultArray = XMLToArray::parse($xmlString);

        $this->assertEquals($expectedArray, $resultArray);
    }
}
