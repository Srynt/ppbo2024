<?php 

class Publisher
{
    public $name;
    public $address;

    private $phone;

    public function __construct(string $name, string $address, int $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(int $phone) : void
    {
        $this->phone = $phone;
    }

    public function getPhone() : int
    {
        return $this->phone;
    }
}
