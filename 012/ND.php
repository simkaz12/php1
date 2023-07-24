/*

1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
2. Naudodamiesi 1 uždavinio masyvu:
    a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
    b) Raskite didžiausio elemento reikšmę;
    c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
    d) Visus antro lygio masyvus “pailginkite” iki 7 elementų
    e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
11. Duotas kodas, generuojantis masyvą:
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.

Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';

Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.



<?php 

// 2D masyvo pvz:

// $masyvas = [];


// for ($i = 0; $i < 10; $i++) {
//     $masyvas[] = rand(33, 77);
// }

// echo '<pre>';
// print_r($masyvas);

// $masyvas2Dimension = [];

// for ($i = 0; $i < 10; $i++) {
//     $masyvas2Dimension[$i] = [];
//     for ($j = 0; $j < 5; $j++) {
//         $masyvas2Dimension[$i][] = rand(33, 77);
//     }
// }

// echo '<pre>';
// print_r($masyvas2Dimension);

/*

$m2D = [];
foreach(range(1, 5) as $_) {
    $tarpinis = [];
    $m = rand(0, 1);
    if($m) {
        foreach (range(1, rand(3, 10)) as $_) {
            $tarpinis[] = rand(33, 77);
        }
    } else {
        $tarpinis= rand(33, 77);
    }
    $m2D[] = $tarpinis;
}

echo '<pre>';
print_r($m2D);

$suma = 0;

foreach ($m2D as $eilute) {
    if (is_array($eilute)) {
        foreach ($eilute as $value) {
            $suma += $value;
        }
    } else {
        $suma += $eilute;
    }
}

echo $suma;

*/


echo '<pre>';
/*




// 1.

$m2D = [];

foreach(range(1, 10) as $_) {
    $tarpinis = [];
    foreach(range(1, 5) as $_) {
        $tarpinis[] = rand(5, 25);
    }
    $m2D[] = $tarpinis;
}

echo '<br>';
//print_r($m2D);

// 2.
//   a)

$sum = 0;

foreach($m2D as $masyvas) {
    foreach($masyvas as $value) {
        if ($value > 10) {
            $sum++;
        }
    }
}

echo $sum;
echo '<br>';

//    b)

$did = 0;

foreach($m2D as $masyvas) {
    foreach($masyvas as $value) {
        if ($value > $did) {
            $did = $value;
        }
    }
}

echo $did;

//    c)

$pirmas = 0;
$antras = 0;
$trecias = 0;
$ketv = 0;
$pnkt = 0;

foreach($m2D as $masyvas) {
   $pirmas += $masyvas[0];
   $antras += $masyvas[1];
   $trecias += $masyvas[2];
   $ketv += $masyvas[3];
   $pnkt += $masyvas[4];
   
}


echo '<br>';
echo '<br>';
echo '<br>';
echo $pirmas;
echo '<br>';
echo $antras;
echo '<br>';
echo $trecias;
echo '<br>';
echo $ketv;
echo '<br>';
echo $pnkt;
echo '<br>';

// d.


$didesnis = [];

foreach($m2D as $value) {
    do {
        $value[] = rand(5, 25);
        $value[] = rand(5, 25);
    } while (count($value) >= 9);
    $didesnis[] = $value;
    
    }
    
  //  print_r($value);


print_r($didesnis);

// e.

$sumos = [];
$zero = 0;
$one = 0;
$two = 0;
$three = 0;
$four = 0;
$five = 0;
$six = 0;



foreach($didesnis as $value) {
    $zero += $value[0];
    $one += $value[1];
    $two += $value[2];
    $three += $value[3];
    $four += $value[4];
    $five += $value[5];
    $six += $value[6];
}

$sumos[] = $zero;
$sumos[] = $one;
$sumos[] = $two;
$sumos[] = $three;
$sumos[] = $four;
$sumos[] = $five;
$sumos[] = $six;


echo '<br>';
print_r($sumos);
*/
// 3.


$m2D = [];

foreach(range(1, 10) as $_) {
    $tarpinis = [];
    foreach(range(1, rand(2, 20)) as $_) {
        $tarpinis[] = chr(rand(65, 90)); // random raides nuo A-Z
    }
    $m2D[] = $tarpinis;
}

echo '<br>';
//print_r($m2D);
// 4.
/*
$sortintas = [];
sort($m2D);

foreach($m2D as $value) {
    $sortintas[] = $value;
}

print_r($sortintas);
*/

usort($m2D, function($a, $b) {
    if (in_array('K', $b) && !in_array('K', $a)) {
        return 1;
    }
    if (in_array('K', $a) && !in_array('K', $b)) {
        return -1;
    }
    return count($a) <=> count($b);
});

//print_r($m2D);

//5.

$masyvas = [];

foreach(range(1, 30) as $_) {
    $tarpinis = [];
    foreach(range(1, 2) as $key => $value) {
        $tarpinis['user_id'] = rand(1, 1000000);
        $tarpinis['place_in_row'] = rand(0, 100);
    }
    $masyvas[] = $tarpinis;
}

echo '<br>';
print_r($masyvas);

// 6.

usort($masyvas, function($a, $b) {
    return $a['place_in_row'] <=> $b['place_in_row'];
});

print_r($masyvas);
// 8.

/*
$arr = [];

foreach(range(1, 10) as $_) {
    $tarpinis = [];
    $arrIlgis = rand(0, 5);
    foreach(range(1, $arrIlgis) as $_) {
        $tarpinis[] = rand(0, 10);
    }
    if ($arrIlgis == 0) {
        $arr[] = rand(0, 10);
    }
    $arr[] = $tarpinis;
}

print_r($arr);
*/