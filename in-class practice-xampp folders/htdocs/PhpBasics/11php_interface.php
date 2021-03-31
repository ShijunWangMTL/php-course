<?php
// all methods in an interface are all public, cannot be static
// one class can implement multiple interfaces, can extend only one class

interface interfaceName {
    const constantName = "value";
    public function methodName($parameters); //abstract method
}

//example, an interface to show an obj
interface Showable {
    public function show();
}

//example, an interface that requires two test methods
interface Testable {
    public function test1($value1);
    public function test2($value1, $value2);
}

// example
interface EyeColor {
    const GREEN = 1;
    const BLUE = 2;
    const BROWN = 3;
}

// implement an interface
class Employee extends Person implements Showable {
    //....
    
    // implement Showable interface
    public function show() {
        echo $this->getFullname() . ", " . $this->getPhone();
    }

    public function getFullname() {
        return $this->getFirstName() . " " . $this->getLastName();
    }

}

?>
