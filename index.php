<?php

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $category;
    private $image;
    
    public function __construct($id, $name, $description, $price, $category, $image) {
        $this->setID($id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setCategory($category);
        $this->setImage($image);
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
        if (strlen($name) <= 20) {
            $this->name = $name;
        } else {
            return;
        }
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($price) {
        $this->price = $price;
    }
    
    public function getCategory() {
        return $this->category;
    }
    
    public function setCategory($category) {
        $this->category = $category;
    }
    
    public function getImage() {
        return $this->image;
    }
    
    public function setImage($image) {
        $this->image = $image;
    }

    public function getData() {
        return 
        "ID: " . $this->getID() . "<br>"
        ."Nome: " . $this->getName() . "<br>"
        ."Descrizione: " . $this->getDescription() . "<br>"
        ."Prezzo: " . $this->getPrice() . "<br>"
        ."Categoria: " . $this->getCategory()->getName() . "<br>"
        ."Tipologia: " . $this->getCategory()->getTypeName() . "<br>";
    }
}

class Category {
    private $id;
    private $name;
    private $description;

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

class Type extends Category {
    private $typeName;

    public function __construct($id, $name, $description, $typeName) {
        parent::__construct($id, $name, $description);
        $this->setTypeName($typeName);
    }

    public function getTypeName() {
        return $this->typeName;
    }

    public function setTypeName($typeName) {
        $this->typeName = $typeName;
    }
}

$gamesCats = new Type(1, "GATTI", "Tutte le informazioni sui gatti", "Giochi");
$gamesDogs = new Type(2, "CANI", "Tutte le informazioni sui cani", "Giochi");

$palla = new Product(1, "Palla di gomma", "Una palla di gomma rimbalzante", 20.99, $gamesDogs, "palla.jpg") ;
// $product2 = new Product(2, "Siamese", "Un gatto di razza Siamese", 15.99, $cats, "gatto.jpg");

echo $palla->getData();

// echo "ID: " . $product2->getID() . "<br>";
// echo "Nome: " . $product2->getName() . "<br>";
// echo "Descrizione: " . $product2->getDescription() . "<br>";
// echo "Prezzo: " . $product2->getPrice() . "<br>";
// echo "Categoria: " . $product2->getCategory()->getName() . "<br>";
