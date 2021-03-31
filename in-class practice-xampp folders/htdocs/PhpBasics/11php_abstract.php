<?php
// final method: cannot be overriden. it's a final version
// final class: cannot be inherited


abstract class Person {
    private $firstName, $lastName, $phone, $email;
    
    public function _construct($first, $last) {
        $this->firstName = $first;
        $this->lastName = $last;
    }
    
    // ....getters and setters
    public function getFirstName() {
        
    }
    public function setFirstName($value) {
        $this->firstName = $value;
    }
    public function getLastName() {
        
    }
    public function setLastName($value) {
        $this->lastName = $value;
    }
    public function getPhone() {
        
    }
    public function setPhone($value) {
        $this->phone = $value;
    }    
    public function getEmail() {
        
    }
    public function setEmail($value) {
        $this->email = $value;
    }
    
    //abstract method
    abstract public function getFullname(); // no body for abstract method
}

// create concrete class
class Customer extends Person {
    private $cardNo, $cardType;
    
    public function _construct($first, $last, $phone, $email) {
        $this->setPhone($phoen);
        $this->setEmail($email);
        parent::_construct($first, $last);
    }
    
    //... getter and setter ...
    
    // has to override/implement all abstract methods
    public function getFullname() {
        return $this->getFirstName() . " " . $this->getLastName();
    }

}

?>

