<?php

//一只青蛙一次可以跳上1级台阶，也可以跳上2级台阶。求该青蛙跳上一个 n级的台阶总共有多少种跳法。
//
//答案需要取模 1e9+7（1000000007），如计算初始结果为：1000000008，请返回 1。

//示例 1：
//输入：n = 2
//输出：2

//示例 2：
//输入：n = 7
//输出：21

//示例 3：
//输入：n = 0
//输出：1

//0 <= n <= 100


class Solution
{
    protected $na = 0;

    /**
     * @param Integer $n
     * @return Integer
     */
    function numWays($n)
    {
        //方法一：
//        if ($n == 1 || $n == 0) return 1;
//        return $this->numWays($n - 1) + $this->numWays($n - 2);

        //方法二(动态规划)：
        $a = $b = 1;
        for ($i = 0; $i < $n; $i++)
        {
            $sum = ($a + $b) % 1000000007;
            $a = $b;
            $b = $sum;
        }

        return $a;
    }
}

$obj = new Solution();
var_dump($obj->numWays(44));