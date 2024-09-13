<?php

// task1

class A {
    public $b = 23;

    public function toString() {
        return "Im instance of A!, $this->b";
    }
}

$a = true;
$b = 7952812;
$c = 3.14;
$d = 'Hello World';
$e = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];
$f = (new A())->toString();
$g = &$b;
$h = 'g';
$$h = 2;
define('name', 'Esteban');

echo "
boolean=$a,
integer=$b,
float=$c,
string=$d,
array=$e,
object=$f,
address=$g,
varvar=$g,
"
.name
;

// task2



// task3



// task4



// task5



// task6



// task7



?>