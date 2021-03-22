<?php

//把数字翻译成字符串
//给定一个数字，我们按照如下规则把它翻译为字符串：0 翻译成 “a” ，1 翻译成 “b”，……，11 翻译成 “l”，……，25 翻译成 “z”。
//一个数字可能有多个翻译。请编程实现一个函数，用来计算一个数字有多少种不同的翻译方法。
//
//示例 1:
//输入: 12258
//输出: 5
//解释: 12258有5种不同的翻译，分别是"bccfi", "bwfi", "bczi", "mcfi"和"mzi"

class Solution
{
    function translateNum($num)
    {
        //方法一：
//        $len = strlen($num);
//        $num = strval($num);
//        $a = $b = 1;
//        for ($i = 1; $i < $len; $i++)
//        {
//            $temp = $num[$i - 1] . $num[$i];
//            $c = $temp > 9 && $temp < 26 ? $a + $b : $a;
//            $b = $a;
//            $a = $c;
//        }
//
//        return $a;

        //方法二：
        $a = 1;
        $b = 1;
        $y = $num % 10;
        while ($num > 9)
        {
            $num /= 10;
            $x = $num % 10;
            $tmp = 10 * $x + $y;
            $c = ($tmp >= 10 && $tmp <= 25) ? $a + $b : $a;
            $b = $a;
            $a = $c;
            $y = $x;
        }
        return $a;
    }
}

$obj = new Solution();
var_dump($obj->translateNum(12258));