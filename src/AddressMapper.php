<?php


namespace Kata;


class AddressMapper
{
    /**
     * @param $address
     * @return MappedAddress
     */
    public function map($address)
    {
        //Map and return the object here.
        return new MappedAddress("Docks",
        "633",
        "3rd Ave",
        "New York",
        "NY",
        "10017",
        "USA",
        "(212) 986-8080");
    }
}