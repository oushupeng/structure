<?php

$array = [3, 4, 101, 2, 10, 95, 58, 1];
$count = count($array);
//for ($i = 0; $i < $count; $i++)
//{
//
//}

//冒泡
function mp(array $array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++)
    {
        for ($j = $i + 1; $j < $count; $j++)
        {
            if ($array[$i] > $array[$j])
            {
                $tmp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }
    return $array;
}

//快速
function ks(array $array)
{
    $count = count($array);
    if ($count < 1) return $array;
    $left = $right = [];
    $mid = $array[0];
    for ($i = 1; $i < $count; $i++)
    {
        if ($mid > $array[$i])
        {
            $left[] = $array[$i];
        }
        else
        {
            $right[] = $array[$i];
        }
    }
    $left = ks($left);
    $right = ks($right);

    return array_merge($left, [$mid], $right);
}

//插入
function cr(array $array)
{
    $count = count($array);
    for ($i = 1; $i < $count; $i++)
    {
        $temp = $array[$i];
        for ($j = $i - 1; $j >= 0; $j--)
        {
            if ($array[$j] > $temp)
            {
                $array[$j + 1] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

//选择
function xz(array $array)
{
    $count = count($array);
    for ($i = 0; $i < $count; $i++)
    {
        $min = $i;
        for ($j = $i + 1; $j < $count; $j++)
        {
            if ($array[$i] > $array[$j])
            {
                $min = $j;
            }
        }
        if ($min != $i)
        {
            $tmp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $tmp;
        }
    }
    return $array;
}

//二分查找
function bin_search($array, $min_key, $max_key, $value)
{
    $min = intval(($min_key + $max_key) / 2);
    if ($value == $array[$min])
    {
        return $value;
    }
    elseif ($value > $array[$min])
    {
        return bin_search($array, $min_key + 1, $max_key, $value);
    }
    else
    {
        return bin_search($array, $min_key, $max_key - 1, $value);
    }
}

//var_dump('冒泡' . join(',', mp($array)));
//var_dump('快速' . join(',', ks($array)));
//var_dump('插入' . join(',', cr($array)));
//var_dump('选择' . join(',', xz($array)));
var_dump('选择' . bin_search(xz($array), 0, $count - 1, 1));