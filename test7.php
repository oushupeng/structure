<?php
$config = include 'config.php';
$array2 = $config['array'];

function arr($n)
{
    if ($n <= 0) return 0;
    $s = 0;
    switch ($n)
    {
        case 1 <= $n && $n <= 5:
            $s = 30;
            break;
        case 6 <= $n && $n <= 20:
            $s = 20;
            break;
        case 21 <= $n && $n <= 50:
            $s = 10;
            break;
        case 51 <= $n && $n <= 200:
            $s = 9;
            break;
        case 201 <= $n && $n <= 500:
            $s = 8;
            break;
        case 501 <= $n && $n <= 1000:
            $s = 7;
            break;
    }

    return arr($n - 1) + $s;
}

function arr2($n, $array2)
{
    if ($n <= 0) return 0;
    $s = 0;
    foreach ($array2 as $key => $value)
    {
        if ($n <= $key)
        {
            $s = $value;
            break;
        }
    }

    return arr2($n - 1, $array2) + $s;
}

function cf($n)
{
    $sum = 1;
    for ($i = 1; $i <= $n; $i++)
    {
        $sum *= $i;
    }
    return $sum;
//    if ($n == 0 || $n == 1) return 1;
//    return cf($n - 1) * $n;
}

//var_dump(arr2(5000, $array2));
var_dump(cf(5));