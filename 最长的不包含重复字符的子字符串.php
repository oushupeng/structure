<?php

//请从字符串中找出一个最长的不包含重复字符的子字符串，计算该最长子字符串的长度。
//
//示例1:
//输入: "abcabcbb"
//输出: 3
//解释: 因为无重复字符的最长子串是 "abc"，所以其长度为 3。
//
//示例 2:
//输入: "bbbbb"
//输出: 1
//解释: 因为无重复字符的最长子串是 "b"，所以其长度为 1。
//
//示例 3:
//输入: "pwwkew"
//输出: 3
//解释: 因为无重复字符的最长子串是"wke"，所以其长度为 3。
//    请注意，你的答案必须是 子串 的长度，"pwke"是一个子序列，不是子串。

class Solution
{
    function lengthOfLongestSubstring($s)
    {
//        $len = strlen($s);
//        $res = $tmp = 0;
//        for ($j = 0; $j < $len; $j++)
//        {
//            $i = $j - 1;
//            while ($i >= 0 && $s[$i] != $s[$j])
//            {
//                $i -= 1;
//            }
//
//            $tmp = $tmp < $j - $i ? $tmp + 1 : $j - $i;
//            $res = $res < $tmp ? $tmp : $res;
//        }
//        return $res;


        $dic = [];
        $res = 0;
        $i = -1;
        $len = strlen($s);
        for ($j = 0; $j < $len; $j++)
        {
            if (in_array($j, $dic)) $i = max($dic[$s[$j]], $i);
            $dic[$s[$j]] = $j;
            $res = max($res, $j - 1);
        }
        return $res;

    }
}

$obj = new Solution();
var_dump($obj->lengthOfLongestSubstring('pwwkew'));