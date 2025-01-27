<?php
class User {
    private $name;
    private $lastName;
    public function __construct() {
        $this->name = "";
        $this->lastName = "";
    }

    public function setName(string $name) {
        $this->name = $name;
    }
    public function setLastName(string $lastName) {
        $this->lastName = $lastName;
    }
    public function getName(): string {
        return $this->name;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

}
?>
