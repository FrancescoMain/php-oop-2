<?php

class Category {
    private $id;
    private $name;
    private $desciption;

    public function __construct($id, $name, $description) {
        $this->setID($id);
        $this->setName($name);
        $this->setDescription($description);
    }

    public function getID() {
        return $this->id;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}