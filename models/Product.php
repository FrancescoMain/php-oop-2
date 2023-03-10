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


}