<?php

//递归乘法
//递归乘法。 写一个递归函数，不使用 * 运算符， 实现两个正整数的相乘。可以使用加号、减号、位移，但要吝啬一些。

//示例1:
// 输入：A = 1, B = 10
// 输出：10

//示例2:
// 输入：A = 3, B = 4
// 输出：12

//提示:
//保证乘法范围不会溢出

function multiply($A, $B)
{
//    $sum = 0;
//    for ($i = 0; $i < $B; $i++)
//    {
//        $sum += $A;
//    }
//    return $sum;

    if ($B == 1) return $A;
    return multiply($A, $B - 1) + $A;
}

var_dump(multiply(3, 9));