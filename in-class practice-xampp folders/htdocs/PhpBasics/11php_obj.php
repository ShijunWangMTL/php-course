<?php
/*** class constants:
 * fixed values. public. can be accessed without creating an object of the class
 * example: const BROWN_EYES = 3;
 * access the const inside class: example: $value == self::BROWN_EYES;
 * access the const outside class: example: $var = className::BROWN_EYES
 *  
 *** static property and method:
 *** example for private static property: private static $count = 0;
 * example for method: public static function getCount() { return self::$count; }
 * inside class: self::$count
 * outside class:  className::getCount()
 *** example for public static property: public static $count = 0;
 * className::$count
 * 
 *** property:
 * private $firstName;
 * public $comment = ''; // public property with a default value
 * protected $counter;
 * private $category, $id, $code, $name, $price; // plural properties on the same line
 * 
 *** constructor:
 * default constructor is non-argument constructor
 * public function _construct(parameters) {  }
 * constructor with default values:
 * public function _construct($id = NULL, $name = NULL) { $this->id = $id; $this->name = $name;  }
 * 
 *** destructor:
 * public function _destruct() {    }
 * destructor for a db class:
 * public function _destruct() { $this->dbConnection->close(); }
 * 
 *** method: public, private, protected
 * set a public property value:
 * $objectName->propertyName = value;
 * get a pubcli property value:
 * $objectName->propertyName;
 * call a method:
 * $objectName->methodName(arguments);
 *** object chaining example:
 * $trumpet->getCategory()->getName();
 * 
 *** looping through an object's properties:
 * foreach($objName as [$propertyName => ] $propertyValue) {    } 
 * 
 *** functions for inspecting an object (introspection/reflection)
 * class_exists(class)
 * get_class)$object)
 * is_a($object, $class)
 *      ex: is_a($trumpet, 'Product');
 * property_exists($object, $property)
 *      ex: property_exists($trumpet, 'price')
 * method_exists($object, $method) 
 *      ex: method_exists($trumpet, 'getPrice')
 * 
 */


//create a class
class Category {
    private $id;
    private $name;
    
    // constructor
    public function _construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
    
    // getter and setter
    public function getId() {
        return $this->id;
    }
    public function setId($value) {
        $this->id = $value;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($value) {
        $this->name = $value;
    }      
}


class Product {
    private $category, $id, $code, $name, $price;
    public function _construct($category, $code, $name, $price) {
        $this->category = $categoryl;
        $this->code = $code;
        $this->name = $name;
        $this->price = $price;      
    }
        public function getCategory() {
        return $this->category;
    }
    public function setCategory($value) {
        $this->category = $value;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($value) {
        $this->id = $value;
    }
    
    public function getPrice() {
        return $this->price;
    }
    public function getPriceFormatted() {
        $formatted_price = number_format($this->price, 2);
        return $formatted_price;
    }
    public function setPrice($value) {
        $this->price = $value;
    }
    public function getDiscountPercent() {
        $discount_percent = 30;
        return $discount_percent;
    }
    public function getDiscountAmount() {
        $discount_percent = $this->getDiscountPercent()/100;
        $discount_amount = $this->price * $discount_percent;
        $discount_amount_r = round($discount_amount, 2);
        $discount_amount_f = number_format($discount_amount_r, 2);
        return $discount_amount_f;
    }
    public function getDiscountPrice() {
        $discount_price = $this->price - $this->getDiscountAmount();
        $discount_price_f = number_format($discount_price, 2);
        return $discount_price_f;
    }
    
    public function getImageFilename() {
        $image_filename = $this->code . ".png";
        return $image_filename;
    }    
    public function getImagePath() {
        $image_path = "../images/" . $this->getImageFilename();
        return $image_path;
    }
    public function getImageAltText() {
        $image_alt = "Image: " . $this->getImageFilename();
        return $image_alt;
    }
    
    public function getName() {
        return $this->name;
    }
    public function setName($value) {
        $this->name = $value;
    }
    public function getCode() {
        return $this->code;
    }
    public function setCode($value) {
        $this->code = $value;
    }      
}


class Employee {
    public $firstName, $lastName;
    private $ssn, $dob;
    public function _construct($first, $last) {
        $this->firstName = $first;
        $this->lastName = $last;
    }
    // more codes for getters and setters......
    
    // show properties - private, protected, public
    public function showAll() {
        echo "<ul>";
        foreach ($this as $name => $value) {
            echo "<li>$name = $value</li>";            
        }
        echo "</ul>";
    }
    
    
}


?>

