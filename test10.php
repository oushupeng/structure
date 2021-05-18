<?php

/**
 * 快速排序算法
 *
 * @param array $arr 无序数组
 * @return array $arr 有序数组
 */
function quick_sort($arr)
{
    $sarr[0] = ['left' => 0, 'right' => count($arr) - 1];   //该数组保存需要排序的子数组边界
    $i = 0;
    $n = 1;
    while ($i < $n)
    {
        //判断还有未排序子数组存在
        $left = $sarr[$i]['left'];    //数组左边界下标0
        $right = $sarr[$i]['right'];    //数组右边界下标4

        $key = $left;    //关键值
        $f = false;      //标志位

        while ($left <= $right)
        {
            if ($f == false)
            {
                if ($arr[$right] < $arr[$key])
                {
                    $tmp = $arr[$key];
                    $arr[$key] = $arr[$right];
                    $arr[$right] = $tmp;
                    $key = $right;
                    $f = true;
                }
                $right--;
            }
            if ($f)
            {
                if ($arr[$left] > $arr[$key])
                {
                    $tmp = $arr[$key];
                    $arr[$key] = $arr[$left];
                    $arr[$left] = $tmp;
                    $key = $left;
                    $f = false;
                }
                $left++;
            }
        }

        //保存入边界数组
        if ($sarr[$i]['left'] < $key - 1)
        {
            $sarr[$n++] = ['left' => $sarr[$i]['left'], 'right' => $key - 1];
        }
        if ($sarr[$i]['right'] > $key + 1)
        {
            $sarr[$n++] = ['left' => $key + 1, 'right' => $sarr[$i]['right']];
        }
        $i++;
    }
    return $arr;
}

//示例
$arr = range(1, 100, 40);
shuffle($arr);
print_r($arr);
print_r(quick_sort($arr));