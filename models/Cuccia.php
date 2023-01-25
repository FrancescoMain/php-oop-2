<?php

class Cuccia extends Product {
    private $typeName;

    public function __construct($id, $name, $description, $price, $category, $image, $typeName) {
        parent::__construct($id, $name, $description, $price, $category, $image);
        $this->setTypeName($typeName);
        }

    public function getTypeName() {
        return $this->typeName;
    }

    public function setTypeName($typeName) {
        $this->typeName = $typeName;
    }

    public function getData() {
        return 
        "ID: " . $this->getID() . "<br>"
        ."Nome: " . $this->getName() . "<br>"
        ."Descrizione: " . $this->getDescription() . "<br>"
        ."Prezzo: " . $this->getPrice() . "€<br>"
        ."Categoria: " . $this->getCategory()->getName() . "<br>"
        ."Tipologia: " . $this->getTypeName() . "<br>";
    }

}