<?php

//输入一个整型数组，数组中的一个或连续多个整数组成一个子数组。求所有子数组的和的最大值。
//要求时间复杂度为O(n)。
//
//示例1:
//输入: nums = [-2,1,-3,4,-1,2,1,-5,4]
//输出: 6
//解释:连续子数组[4,-1,2,1] 的和最大，为6。
//
//提示：
//
//1 <=arr.length <= 10^5
//-100 <= arr[i] <= 100

///
///
///
///
///
///
///
///
///

class Solution
{
    function maxSubArray($nums)
    {
//        方法一：
        $len = count($nums);
        if ($len == 0) return false;
        $sum[0] = $nums[0];
        for ($i = 1; $i < $len; $i++)
        {
            if ($sum[$i - 1] < 0)
            {
                $sum[$i] = $nums[$i];
            }
            else
            {
                $sum[$i] = $nums[$i] + $sum[$i - 1];
            }
        }
        return max($sum);

        //方法二：
//        if (!$nums) return 0;
//        $max = $nums[0];
//        $sum = 0;
//        foreach ($nums as $value)
//        {
//            if ($sum < 0)
//            {
//                $sum = $value;
//            }
//            else
//            {
//                $sum += $value;
//            }
//
//            if ($max < $sum) $max = $sum;
//        }
//
//        return $max;
    }
}

$obj = new Solution();
$nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
var_dump($obj->maxSubArray($nums));