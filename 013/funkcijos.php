<?php

function fun() {
    echo '<h1>Have Fun!!</h1>';
return 1; // 'nieko negrazina' nebent yra return

}
// viena arba kelis kartus.

fun();
fun();                      

var_dump(fun());          //jei nieko tai buna null





function sum($a, $b) {
    return $a + $b;
}

echo '<br>';
echo sum(2, 3);





function sum2 (...$sums) { // ... - rest operator
    $sum = 0;
    foreach ($sums as $value) {
        $sum += $value;
    }
    return $sum;
}
echo '<br>';
echo sum2(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo '<br>';
echo sum2(1, 2, 3, 4, 5, 6, 7, 2, 3, 4, 5, 8, 9, 10, 100);
echo '<br>';
echo sum2(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 100, 1000);
echo '<br>';





function times($a, $b, $c, $d = 10) {
    return $a * $b * $c * $d;
}

echo '<br>';
echo times(1, 5, 7);

$digit = [1, 5, 7];

echo '<br>';
echo times(...$digit); // ... - spread operator

echo '<br>';




function strongTipe(int $a, int $b) : int {         // jei paduodama nurodyta reiksme veikia ir ': int' returno tipas
    return $a + $b;
}

echo '<br>';
echo strongTipe(1, 2);

/*




-------------------------------------------------REFLECTION----------------------------------------------------------
                                            (butinai paziuret)



*/


echo '<br>';

$raccoon = 'Raccoon';

function raccoon() {
    global $raccoon; // - global scope is very bad practice
    echo $raccoon;
}


raccoon();


function withStatic() {
    static $a = 0;
    echo $a;
    echo '<br>';
    $a++;
}

withStatic();
withStatic();
withStatic();
withStatic();
withStatic();


echo '<br>';



function withRecursion($a) {
    echo 'Enter' . $a;
    echo '<br>';
    if($a < 5) {
        withRecursion($a + 1);
    }
    echo 'Exit' . $a;
    echo '<br>';
}

withRecursion(1);


$arrayForRecursionSum = [
    8, 
    [
        5, 3, 
        [
            5,
            [
                1, 2, 3
            ], 7
        ]
        ], 5, 
        [
            1, 2, 3
        ]
        ];


function recursionSum(array $array) {
    $sum = 0;
    foreach($array as $value) {
        if (is_array($value)) {
            $sum += recursionSum($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}

echo '<br>';

echo recursionSum($arrayForRecursionSum);

echo '<br>';


$anonym = function($a, $b) {
    return $a + $b;
};
// echo $anonym(1, 2);

function withCallback(int $a, int $b, Closure $callback) {
    return $callback($a, $b);
}

echo withCallback(10, 222, $anonym);

echo '<br>';




$anonym = fn($a, $b) => $a + $b;




$ba = 333;

$anonym = function($a , $b) use ($ba) {
    return $a + $b + $ba;
};

$anonArrow = fn($a, $b) => $a + $b + $ba;

echo $anonArrow(1, 2);