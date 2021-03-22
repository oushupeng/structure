<?php

//写一个函数，输入 n ，求斐波那契（Fibonacci）数列的第 n 项（即 F(N)）。斐波那契数列的定义如下：
//
//F(0) = 0, F(1)= 1
//F(N) = F(N - 1) + F(N - 2), 其中 N > 1.
//斐波那契数列由 0 和 1 开始，之后的斐波那契数就是由之前的两数相加而得出。
//
//答案需要取模 1e9+7（1000000007），如计算初始结果为：1000000008，请返回 1。

class Solution
{
    protected $na = 0;

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n)
    {
        //方法一：
//        if ($n == 1 || $n == 0) return $n;
//        $aa = $this->fib($n - 1);
//        $bb = $aa + $this->na;
//        $this->na = $aa;
//        return $bb;

        //方法二：
//        if ($n == 1 || $n == 0) return $n;
//        return $this->fib($n - 1) + $this->fib($n - 2);

//        方法三：（动态规划）
        if ($n == 1 || $n == 0) return $n;
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $n; $i++)
        {
            $sum = ($b + $a) % 1000000007;
            $a = $b;
            $b = $sum;
        }
        return $a;
    }
}

$obj = new Solution();
var_dump($obj->fib(5));
