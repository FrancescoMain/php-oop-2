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
        if (strlen($name) <= 10) {
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

$dogs = new Category(1, "CANI", "Tutte le informazioni sui cani");
$cats = new Category(2, "GATTI", "Tutte le informazioni sui gatti");

$product1 = new Product(1, "Pastore Tedesco", "Un cane di razza Pastore Tedesco", 20.99, $dogs);
$product2 = new Product(2, "Siamese", "Un gatto di razza Siamese", 15.99, $cats);


echo "ID: " . $product->getID() . "<br>";
echo "Nome: " . $product->getName() . "<br>";
echo "Descrizione: " . $product->getDescription() . "<br>";
echo "Prezzo: " . $product->getPrice() . "<br>";
echo "Categoria: " . $product->getCategory() . "<br>";
echo "Immagine: " . $product->getImage() . "<br>";