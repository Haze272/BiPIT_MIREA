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
/*
 * Вычислить расстояние между
 * двумя точками в пространстве
 * с заданными координатами.
 */
echo "\n\n+++++++++
task5
+++++++++";

$p1 = [rand(-20, 20), rand(-20, 20)];
$p2 = [rand(-20, 20), rand(-20, 20)];

$distance = sqrt(pow($p2[0] - $p1[0], 2) + pow($p2[1] - $p1[1], 2));

echo "\ndistance between [$p1[0], $p1[1]] and [$p2[0], $p2[1]] is $distance";

// task6
/*
 * Даны две точки с заданными:
 * абсциссой и ординатой. Составить алгоритм,
 * определяющий, которая из точек находится ближе к началу координат.
 */
echo "\n\n+++++++++
task6
+++++++++";

function compareNearestToO($point1, $point2) {
    $d1 = sqrt(pow(0 - $point1[0], 2) + pow(0 - $point1[1], 2));
    $d2 = sqrt(pow(0 - $point2[0], 2) + pow(0 - $point2[1], 2));
    echo "\nd1 is $d1";
    echo "\nd2 is $d2";

    if ($d1 > $d2) {
        return $point2;
    }
    else if ($d1 < $d2) {
        return $point1;
    }
    else if ($d1 == $d2) {
        return 0;
    }
    else {
        return new Error('Unexpected input');
    }
}

$p1 = [rand(-20, 20), rand(-20, 20)];
$p2 = [rand(-20, 20), rand(-20, 20)];

$nearest = compareNearestToO($p1, $p2);

echo "\ncomparing two points [$p1[0], $p1[1]] and [$p2[0], $p2[1]] nearest to [0, 0] is [$nearest[0], $nearest[1]]";

// task7
/*
 * Дано натуральное число n. Переставить местами
 * первую и последнюю цифры этого числа.
 */

?>