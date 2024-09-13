<?php

// task1
echo "\n+++++++++
task1
+++++++++\n\n";

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

echo "\n\n+++++++++
task2
+++++++++";

$a = 21 / 6;
$c=$d=1;

echo "
21 / 6 = $a
$c, $d
";

@($a /= 0);
echo "3 / 0 no $a"
;

// task3



// task4



// task5



// task6



// task7



?>