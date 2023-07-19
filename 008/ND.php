<?php

/*
# 1.
$vardas = 'Ponas';
$pavarde = 'Kebas';
$gim = '1994';
$year = '2023';
$metai = $year - $gim;

echo "As esu $vardas $pavarde. Man yra $metai metai.<br>";

# 2.

$pirmas = rand(0, 4);
$antras = rand(0, 4);
$rezultatas = ($pirmas > $antras) ? $pirmas / $antras : $antras / $pirmas;


echo number_format((float)$rezultatas, 2, '.', '').'<br>';

# 3.

$vienas = rand(0, 25);
$du = rand(0, 25);
$trys = rand(0, 25);

if ($vienas >= $du && $vienas <= $trys) {
    echo $vienas.'<br>';
} elseif ($du >= $vienas && $du <= $trys) {
    echo $du.'<br>';
} elseif ($trys >= $vienas && $trys <= $du){
    echo $du.'<br>';
} 

# 4.

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if (($a + $b) >= $c) {
    echo 'YES <br>';
} else {
    echo 'NO <br>';
}

# 5.

$one = rand(0, 2);
$two = rand(0, 2);
$tree = rand(0, 2);
$four = rand(0, 2);

$nuliu = 0;
$vienetu = 0;
$dvejetu = 0;

match($one) {
    0 => $nuliu++,
    1 => $vienetu++,
    2 => $dvejetu++,
};

match($two) {
    0 => $nuliu++,
    1 => $vienetu++,
    2 => $dvejetu++,
};

match($tree) {
    0 => $nuliu++,
    1 => $vienetu++,
    2 => $dvejetu++,
};

match($four) {
    0 => $nuliu++,
    1 => $vienetu++,
    2 => $dvejetu++,
};

echo "Nuliu: $nuliu, Vienetu: $vienetu, Dvejetu: $dvejetu";

# 6.

$rand = rand(1, 6);

echo "<h$rand>$rand</h$rand>";

# 7.

$skaicius1 = rand(-10, 10);
$skaicius2 = rand(-10, 10);
$skaicius3 = rand(-10, 10);

if ($skaicius1 < 0) {
    echo "<span style=\"color: green\">$skaicius1</span><br>";
}else if ($skaicius1 > 0) {
    echo "<span style=\"color: blue\">$skaicius1</span><br>";
}else if ($skaicius1 == 0) {
    echo "<span style=\"color: red\">$skaicius1</span><br>";
};

if ($skaicius2 < 0) {
    echo "<span style=\"color: green\">$skaicius2</span><br>";
}else if ($skaicius2 > 0) {
    echo "<span style=\"color: blue\">$skaicius2</span><br>";
}else if ($skaicius2 == 0) {
    echo "<span style=\"color: red\">$skaicius2</span><br>";
};

if ($skaicius3 < 0) {
    echo "<span style=\"color: green\">$skaicius3</span><br>";
}else if ($skaicius3 > 0) {
    echo "<span style=\"color: blue\">$skaicius3</span><br>";
}else if ($skaicius3 == 0) {
    echo "<span style=\"color: red\">$skaicius3</span><br>";
};

# 8.

$zvakes = rand(5, 3000);

if ($zvakes > 1000) {
    $kaina = $zvakes - (($zvakes / 100) * 3);
    echo "Perkama $zvakes zvakiu. Jos kainuos: $kaina EUR.<br>";
} else if ($zvakes > 2000) {
    $kaina = $zvakes - (($zvakes / 100) * 4);
    echo "Perkama $zvakes zvakiu. Jos kainuos: $kaina EUR.<br>";
} else {
    echo "Perkama $zvakes zvakiu. Jos kainuos: $zvakes EUR.<br>";
};


echo '<pre>';

$arr = [];
foreach(range(1, 30) as $value) {
    $arr[] = rand(5, 25);
}

print_r($arr);
unset($value);
$sum = 0;
//a 
foreach($arr as $_ => $kek) {
    if($kek > 10) {
        $sum++;
    }
}
echo '<br>';
echo $sum;
//b
$did = 0;
$didIndex = 0;
echo '<br>';


foreach ($arr as $key => $value) {
    if($value > $did) {
        $did = $value;
    }
}

print_r(array_keys($arr, $did));
echo '<br>';
$sum = 0;

foreach($arr as $key => $value) {
    if($key % 2 === 0) {
        $sum += $value;
    }
}

print_r($sum);

foreach(range(1, 10) as $value) {
    $arr[] = rand(5, 25);
}

print_r($arr);

$arrPor = [];
$arrNe = [];

foreach($arr as $key => $value) {
    if($key % 2 === 0) {
        $arrPor[] = $value;
    } else {
        $arrNe[] = $value;
    }
}

print_r($arrPor);
print_r($arrNe);
//***************************************************************************************************************** */
/*
foreach($arr as $key => $value) {
    if($key % 2 === 0 && $value >= 15) {
        $arr[$key] = 0;
    }
}

print_r($arr); 
echo '***********************************************<br>';

$small = 25;
$indexas = 0;

foreach($arr as $key => $value) {
    if ($value < 25) {
        $small = $value;
        $indexas = $key;
    } else {
        continue;
    }
}

print_r($indexas);
echo '<br>';

foreach($arr as $key => $value) {
    if ($key % 2 === 0) {
        unset($arr[$key]);
    }
}

print_r($arr);
*/
echo '*******************************************************<br>';
//***************************************************************************************************************** */
echo '<pre>';
$naujasArr = [];

foreach(range(1, 200) as $value) {
    $naujasArr[] = rand(0, 3);
}
foreach($naujasArr as $key => $letter) {
    if($letter === 0) {
        $naujasArr[$key] = 'A';
    } else if ($letter === 1) {
        $naujasArr[$key] = 'B';
    } else if ($letter === 2) {
        $naujasArr[$key] = 'C';
    } else {
        $naujasArr[$key] = 'D';
    }
}

print_r($naujasArr);
echo '--------------------------------------------------------------------<br>';
echo '--------------------------------------------------------------------<br>';
echo '--------------------------------------------------------------------<br>';
echo '--------------------------------------------------------------------<br>';
echo '--------------------------------------------------------------------<br>';
echo '--------------------------------------------------------------------<br>';
echo '--------------------------------------------------------------------<br>';

// 4.
sort($naujasArr);
print_r($naujasArr);

// 6.

foreach(range(1, 100) as $_) {
    $pirmas[] = rand(100, 999);  
};


foreach($pirmas as $key => $value) {
    $randomas = rand(100, 999);
    if ($value !== $randomas) {
        $antras[] = $randomas;
    }
}
    
print_r($pirmas);
echo '<br>';
print_r($antras);
