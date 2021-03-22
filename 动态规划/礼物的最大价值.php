<?php

//在一个 m*n 的棋盘的每一格都放有一个礼物，每个礼物都有一定的价值（价值大于 0）。
//你可以从棋盘的左上角开始拿格子里的礼物，并每次向右或者向下移动一格、直到到达棋盘的右下角。
//给定一个棋盘及其上面的礼物的价值，请计算你最多能拿到多少价值的礼物？
//
//示例 1:
//输入:
//[
//     [1,3,1],
//     [1,5,1],
//     [4,2,1]
//]
//输出: 12
//解释: 路径 1→3→5→2→1 可以拿到最多价值的礼物
//
//0 < grid.length <= 200
//0 < grid[0].length <= 200


class Solution
{
    function maxValue($grid)
    {
        $len = count($grid);
        $n = count($grid[0]);
        for ($i = 0; $i < $len; $i++)
        {
            for ($j = 0; $j < $n; $j++)
            {
                if ($i == 0 && $j == 0) continue;
                if ($i == 0) $grid[$i][$j] += $grid[$i][$j - 1];
                elseif ($j == 0) $grid[$i][$j] += $grid[$i - 1][$j];
                else
                {
                    if ($grid[$i - 1][$j] > $grid[$i][$j - 1]) $grid[$i][$j] += $grid[$i - 1][$j];
                    else $grid[$i][$j] += $grid[$i][$j - 1];
                }
            }
        }

        return $grid[$len - 1][$n - 1];
    }
}

$arr =
    [
        [1, 3, 1],
        [1, 5, 1],
        [4, 2, 1]
    ];
$obj = new Solution();
var_dump($obj->maxValue($arr));

//$username = "linshouyue";
//
//echo substr_replace($username,'**','1',strlen($username)-2);