<?php

// task1
echo "\n+++++++++
task1
+++++++++\n\n";

class A
{
    public $b = 23;

    public function toString()
    {
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
    . name;

// task2

echo "\n\n+++++++++
task2
+++++++++";

$a = 21 / 6;
$c = $d = 1;

echo "
21 / 6 = $a
$c, $d
";

//@($a /= 0);
echo "3 / 0 no $a";

// task3

echo "\n\n+++++++++
task3
+++++++++";

for ($i = 1; $i < 3; $i++) {
    echo "i = $i";
}

$names = ['Esteban', 'Pedro', 'Gamimuli'];

foreach ($names as $index => $val):
    echo "\nHola, $val con numero $index";
endforeach;


// task4

echo "\n\n+++++++++
task4
+++++++++";

$number = rand(10, 99);

echo "\nrand is $number \n";
for ($i = 100; $i < 1000; $i++):
    if ($i % $number == 0 && $i % 2 == 0):
        echo "$i, ";
    endif;
endfor;


// task5


// task6


// task7


?>