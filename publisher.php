<?php
class Publisher {
    public $name;
    public $address;
    public $phone;


    public function setPhone(int $phone): void {
        $this->phone = (string) $phone;
    }

    public function getPhone(): int {
        return (int) $this->phone;
    }
}
