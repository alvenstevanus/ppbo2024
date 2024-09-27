<?php
namespace App\Admin\Model\Pustaka;
class Publisher {
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(int $phone): void {
        $this->phone = (string) $phone;
    }

    public function getPhone(): int {
        return (int) $this->phone;
    }
}
