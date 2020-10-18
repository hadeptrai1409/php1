<?php
// class A {
//     public $name = "Vinh";
//     protected $age = 20;
//     private $saraly = 1000;
// }

// class B extends A {
//  function getName() {
//      return $this->name;
//  }
//  function getAge() {
//     return $this->age;
// }
// function getSalary() {
//     return $this->salary;
// }
// }
// $nam = new B();
// echo $nam->getName();
// echo $nam->getAge();
// echo $nam->getSalary();

// $long = new A();
// echo $long->age;

class NgoiNha {
    private $ngoinha;
    function ok($ok) {
        return $this->ngoinha = $ok;
    }
    function j() {
        return $this->ngoinha;
    }
}

$ngoinha = new NgoiNha();
$ngoinha->ok('Chung cư Mini rẻ nhất 2020');
echo $ngoinha->j();
?>