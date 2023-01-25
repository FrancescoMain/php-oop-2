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
    public function getData(){
        return
        "ID: " . $this->getID() . "<br>"
        ."Nome: " . $this->getName() . "<br>"
        ."Descrizione: " . $this->getDescription() . "<br>"
        ."Tipologia: " . $this->getTypeName() . "<br>";
    }
}

$gamesCats = new Type(1, "GATTI", "Tutte le informazioni sui gatti", "Giochi");
$gamesDogs = new Type(2, "CANI", "Tutte le informazioni sui cani", "Giochi");
$foodCats = new Type(3, "GATTI", "Tutte le informazioni sui gatti", "Cibo");
$foodDogs = new Type(4, "CANI", "Tutte le informazioni sui cani", "Cibo");
$bedCats = new Type(5, "GATTI", "Tutte le informazioni sui gatti", "Cuccia");
$bedDogs = new Type(6, "CANI", "Tutte le informazioni sui cani", "Cuccia");

$palla = new Product(1, "Palla di gomma", "Una palla di gomma rimbalzante", 20.99, $gamesDogs, "palla.jpg") ;
$topo = new Product(2, "Topo Giocattolo", "Un topo finto", 10.99, $gamesCats, "topo.jpg") ;
$crocchetteCane = new Product(3, "Crocchette per cani", "Crocchette di media grandezza", 30.99, $foodDogs, "crocchette.jpg") ;
$latteGatto = new Product(4, "Latte per gatti", "Latte per gatti appena nati", 4.99, $foodCats, "latte.jpg") ;
$cucciaCane = new Product(5, "Cuccia per cane", "Cuccia per cane taglia grande", 50.99, $bedDogs, "cucciaXL.jpg") ;
$cucciaGatto = new Product(6, "Cuccia per gatti", "Cuccia per gatti appena nati", 13.99, $bedCats, "cucciaS.jpg") ;


echo $palla->getData();
echo "<br> <br>";
echo $topo->getData();
echo "<br> <br>";
echo $crocchetteCane->getData();
echo "<br> <br>";
echo $latteGatto->getData();
echo "<br> <br>";
echo $cucciaCane->getData();
echo "<br> <br>";
echo $cucciaGatto->getData();


