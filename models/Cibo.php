<?php

class Cibo extends Product {
    private $typeName;
    private $expirationDate;

    public function __construct($id, $name, $description, $price, $category, $image, $typeName, $expirationDate) {
        parent::__construct($id, $name, $description, $price, $category, $image);
        $this->setTypeName($typeName);
        $this->setExpirationDate($expirationDate);
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

    public function getData() {
        return 
        "ID: " . $this->getID() . "<br>"
        ."Nome: " . $this->getName() . "<br>"
        ."Descrizione: " . $this->getDescription() . "<br>"
        ."Prezzo: " . $this->getPrice() . "€<br>"
        ."Categoria: " . $this->getCategory()->getName() . "<br>"
        ."Tipologia: " . $this->getTypeName() . "<br>"
        ."Scadenza: " . $this->getExpirationDate() . "<br>";

    }

}