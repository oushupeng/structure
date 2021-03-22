<?php


//二分查找O(log2n)
function erfen($a, $l, $h, $f)
{
    if ($l > $h)
    {
        return false;
    }
    $m = intval(($l + $h) / 2);
    if ($a[$m] == $f)
    {
        return $m;
    }
    elseif ($f < $a[$m])
    {
        return erfen($a, $l, $m - 1, $f);
    }
    else
    {
        return erfen($a, $m + 1, $h, $f);
    }

}

$a = [1, 12, 23, 67, 88, 100];
var_dump(erfen($a, 0, 5, 1));
//遍历树O(log2n)
function bianli($p)
{
    $a = [];
    foreach (glob($p . '/*') as $f)
    {
        if (is_dir($f))
        {
            $a = array_merge($a, bianli($f));
        }
        else
        {
            $a[] = $f;
        }
    }
    return $a;
}

//阶乘O(log2n)
function jc($n)
{
    if ($n <= 1)
    {
        return 1;
    }
    else
    {
        return $n * jc($n - 1);
    }
}

//快速查找 O(n *log2(n))
function kuaisu($a)
{
    $c = count($a);
    if ($c <= 1)
    {
        return $a;
    }
    $l = $r = [];
    for ($i = 1; $i < $c; $i++)
    {
        if ($a[$i] < $a[0])
        {
            $l[] = $a[$i];
        }
        else
        {
            $r[] = $a[$i];
        }
    }
    $l = kuaisu($l);
    $r = kuaisu($r);
    return array_merge($l, [$a[0]], $r);
}

//插入排序 O(N*N)
function charu($a)
{
    $c = count($a);
    for ($i = 1; $i < $c; $i++)
    {
        $t = $a[$i];
        for ($j = $i; $j > 0 && $a[$j - 1] > $t; $j--)
        {
            $a[$j] = $a[$j - 1];
        }
        $a[$j] = $t;
    }
    return $a;
}

//选择排序O(N*N)
function xuanze($a)
{
    $c = count($a);
    for ($i = 0; $i < $c; $i++)
    {
        for ($j = $i + 1; $j < $c; $j++)
        {
            if ($a[$i] > $a[$j])
            {
                $t = $a[$j];
                $a[$j] = $a[$i];
                $a[$i] = $t;
            }
        }
    }
    return $a;
}

//冒泡排序 O(N*N)
function maopao($a)
{
    $c = count($a);
    for ($i = 0; $i < $c; $i++)
    {
        for ($j = $c - 1; $j > $i; $j--)
        {
            if ($a[$j] < $a[$j - 1])
            {
                $t = $a[$j - 1];
                $a[$j - 1] = $a[$j];
                $a[$j] = $t;
            }
        }
    }
    return $a;
}