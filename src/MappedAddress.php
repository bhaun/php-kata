<?php
namespace Kata;

class MappedAddress
{
    public $business;
    public $address;
    public $street;
    public $city;
    public $state;
    public $postal_code;
    public $country;
    public $telephone;

    /**
     * MappedAddress constructor.
     * @param string $business
     * @param string $address
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $postal_code
     * @param string $country
     * @param string $telephone
     */
    public function __construct(
        $business = "",
        $address = "",
        $street = "",
        $city = "",
        $state = "",
        $postal_code = "",
        $country = "",
        $telephone = ""
    ) {
        $this->business = $business;
        $this->address = $address;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->postal_code = $postal_code;
        $this->country = $country;
        $this->telephone;
    }
}