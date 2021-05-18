<?php
$array = [
    'a' => 1,
    'c' => [
        'aa' => 21,
        'zz' => 22,
        'cc' => 23,
    ],
    'z' => 3,
    'b' => 4,
];

$array2 = [
    'CANON' => [
        'DCIM' => [
            '100CANON',
            '101CANON',
            'CANONMSC'
        ],
        'CANON_SC' => [
            'IMAGE' => ['0001'],
            'DOCUMENT' => ['0001'],
        ],
        'MISC'
    ]];

function arr($array, $prefix = ';')
{
    $new = '';
    foreach ($array as $key => $value)
    {
        if (is_array($value))
        {
            $new .= arr($value, $prefix . $key . '.');
        }
        else
        {
            $new .= $prefix . $key . '.' . $value;
        }
    }
    return $new;
}

function arr2($array, $prefix = ';')
{
    $new = '';
    ksort($array);
    foreach ($array as $key => $value)
    {
        if (is_array($value))
        {
            ksort($value);
            $new .= arr($value, $prefix . $key . '.');
        }
        else
        {
            $new .= $prefix . $key . '.' . $value;
        }
    }
    return $new;
}

//var_dump(trim(arr2($array), ';'));
var_dump(arr($array));