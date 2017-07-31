<?php

namespace Kata\Tests;

use Kata\AddressMapper;
use Kata\MappedAddress;

class KataTest extends \PHPUnit_Framework_TestCase
{
    private $addresses = [];

    private $expected = [];

    protected function setUp()
    {
        parent::setUp();

        //Arrays start at 1
        $this->addresses = [
            1 => "Docks\n" .
                "633 3rd Ave\n" .
                "New York, NY\n" .
                "10017\n" .
                "USA\n" .
                "(212) 986-8080",

            2 => "Hotel Hans Egede\n" .
                "146 E Daisyfield Dr\n" .
                "Draper, Ut\n" .
                "84020\n" .
                "USA\n" .
                "+299 32 42 22",

            3 => "Alex Bergman\n" .
                "2257 S Galapago St\n" .
                "Denver, CO\n" .
                "80223\n" .
                "USA\n" .
                "+49 331 200900",

            4 => "Dr KS Krishnan Marg\n" .
                "1400 R St\n" .
                "Lincoln, NE\n" .
                "68588\n" .
                "USA\n" .
                "0118 999 881 999 119 7253\n"
        ];

        $this->expected = [

            1 => new MappedAddress("Docks",
                "633",
                "3rd Ave",
                "New York",
                "NY",
                "10017",
                "USA",
                "(212) 986-8080"),

            2 => new MappedAddress("Hotel Hans Egede",
                "146",
                "E Daisyfield Dr",
                "Draper",
                "Ut",
                "84020",
                "USA",
                "+299 32 42 22"),

            3 => new MappedAddress("Alex Bergman",
                "2257",
                "S Galapago St",
                "Denver",
                "CO",
                "80223",
                "USA",
                "+49 331 200900"),

            4 => new MappedAddress("Dr KS Krishnan Marg",
                "1400",
                "R St",
                "Lincoln",
                "NE",
                "68588",
                "USA",
                "0118 999 881 999 119 7253")
        ];
    }


    public function testReturnType()
    {
        $mapper = new AddressMapper();
        $results = $mapper->map($this->addresses[1]);
        $this->assertInstanceOf(MappedAddress::class, $results, "Results not an instance of " . MappedAddress::class);
    }

    public function testSingleAddress()
    {
        $mapper = new AddressMapper();
        $results = $mapper->map($this->addresses[1]);
        $this->assertEquals($this->expected[1], $results);
    }

    public function testAllAddresses()
    {
        $mapper = new AddressMapper();

        foreach($this->addresses as $k => $v){
            $results = $mapper->map($v);
            $this->assertEquals($this->expected[$k], $results);
        }
    }
}
