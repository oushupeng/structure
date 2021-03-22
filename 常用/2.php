<?php


/**
 * 排列组合
 * 采用二进制方法进行组合的选择，如表示5选3时，只需有3位为1就可以了，所以可得到的组合是 01101 11100 00111 10011 01110等10种组合
 *
 * @param 需要排列的数组 $arr
 * @param 最小个数 $min_size
 * @return 满足条件的新数组组合
 */
function plzh($arr, $size = 5)
{
    $len = count($arr);
    $max = pow(2, $len);
    $min = pow(2, $size) - 1;
    $r_arr = [];
    for ($i = $min; $i < $max; $i++)
    {
        $count = 0;
        $t_arr = [];
        for ($j = 0; $j < $len; $j++)
        {
            $a = pow(2, $j);
            $t = $i & $a;
            if ($t == $a)
            {
                $t_arr[] = $arr[$j];
                $count++;
            }
        }
        if ($count == $size)
        {
            $r_arr[] = $t_arr;
        }
    }
    return $r_arr;
}

$pl = pl([1, 2, 3, 4, 5, 6, 7], 5);
var_dump($pl);

