<?php
//冒泡
function mp()
{
    $array = [1, 3, 5, 32, 756, 2, 6];
    $len = count($array);
    for ($i = 0; $i < $len - 1; $i++)
    {
        for ($j = $i + 1; $j < $len; $j++)
        {
            if ($array[$j] > $array[$i])
            {
                $tmp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $tmp;
            }
        }
    }

    return $array;
}

//插入
function cr()
{
    $array = [1, 3, 5, 32, 756, 2, 6];
    $len = count($array);

    //第0个元素默认当做已排好序的
    for ($i = 1; $i < $len; $i++)
    {
        //每次取出第一个未排序的值
        $tmp = $array[$i];
        for ($j = $i - 1; $j >= 0; $j--)
        {
            //从已排好序的最后一个元素开始往前找
            if ($tmp < $array[$j])
            {
                $array[$j + 1] = $array[$j];
                $array[$j] = $tmp;
            }
            else
            {
                //如果碰到不需要移动的元素，由于是已经排序好是数组，则前面的就不需要再次比较了，跳出本层循环提高排序效率
                //跳出循环的效率比不跳出循环的效率高出大约40%
                break;
            }
        }
    }

    return $array;
}

//选择
function xz()
{
    $array = [1, 3, 5, 32, 756, 2, 6];
    $len = count($array);
    //双重循环完成，外层控制轮数，内层控制比较次数
    for ($i = 0; $i < $len; $i++)
    {
        //默认把第一个当做大的值
        $bigest = $i;
        //第一轮，第一个元素和第二个以后的元素逐个比较，找出最大的值对应的key
        //第二轮，第二个元素和第三个以后的元素逐个比较，找出最大的值对应的key
        //以此类推
        for ($j = $i + 1; $j < $len; $j++)
        {
            if ($array[$j] > $array[$bigest])
            {
                //如果当前值小于下一个值，则把下一个值的key赋值给$bigest
                $bigest = $j;
            }
        }
        if ($i != $bigest)
        {
            //如果最终找到的最大的值的key不等于当前轮的key，则进行替换
            $temp = $array[$bigest];
            $array[$bigest] = $array[$i];
            $array[$i] = $temp;
        }
    }

    return $array;
}

//快速
function ks($arr)
{
    $length = count($arr);
    if ($length <= 1) return $arr;
    //取出一个值作为中间值
    $mid = $arr[0];
    //左右护法
    $left = [];
    $right = [];
    for ($i=1;$i<$length;$i++){
        if ($arr[$i] < $mid) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $left = ks($left);
    $right = ks($right);
    return array_merge($left,array($mid),$right);
}

$arr = [4,5,6,2,8,9,5,6,7,7,8,89,9,9,7,8,9,0,8,44,88,99,39];
var_dump(ks($arr));