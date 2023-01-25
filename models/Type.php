<?php

class Type extends Product {
    private $typeName;

    public function __construct($id, $name, $description, $price, $category, $image, $typeName, $expirationDate) {
        parent::__construct($id, $name, $description, $price, $category, $image);
        $this->setTypeName($typeName);

    }

    public function getTypeName() {
        return $this->typeName;
    }

    public function setTypeName($typeName) {
        $this->typeName = $typeName;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;
    }

}