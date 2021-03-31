<?php
// create a superclass/ base class/ parent class
class Person {
  protected $name, $phone, $email; // protected properties can be accessed in subclass
  public function _construct($name) {
      $this->name = $name;
  }
  public function getName() {
      return $this->name;
  }
  public function setName($value) {
      $this->name = $value;
  }
  public function getPhone() {
      return $this->phone;
  }
  public function setPhone($value) {
      $this->phone = $value;
  }
  public function getEmail() {
      return $this->email;
  }
  public function setEmail($value) {
      $this->email = $value;
  }  
}

// create a subclass/ derived class / child class
// inheritance/inherit/extend a superclass/override a method of a superclass
class Employee extends Person {
    private $ssn, $hireDate;
    public function _construct($name, $ssn, $hireDate) {
        $this->ssn = $ssn;
        $this->hireDate = $hireDate;
        // finish initialization from superclass
        parent::_construct($name);
    }

    public function getFullname() {
        return $this->getFirstName() . " " . $this->getLastName();
    }

    // more codes for getter and setter of $ssn, $hireDate
}

// create objects of subclass
$emp = new Employee("John Doe", "999-111-2222", "10-21-1996");
$emp->setPhone("123-456-7890");
// inherited from Person class

?>

