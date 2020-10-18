<?php
class Animal {
    static function test() {
        return 'something';
        $model = new static();
        var_dump($model);
    }
    function total($a, $b) {
        return $a+$b;

    }
}

class Duck extends Animal{}
class Cat extends Animal{}

Duck::test();
Cat::test();

echo Animal::test();

?>