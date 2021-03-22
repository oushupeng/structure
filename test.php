<?php

//矩阵中的路径
//请设计一个函数，用来判断在一个矩阵中是否存在一条包含某字符串所有字符的路径。路径可以从矩阵中的任意一格开始，每一步可以在矩阵中向左、右、上、下移动一格。如果一条路径经过了矩阵的某一格，那么该路径不能再次进入该格子。
//例如，在下面的3×4的矩阵中包含一条字符串“bfce”的路径（路径中的字母用加粗标出）。
//
//[["a","b","c","e"],
//["s","f","c","s"],
//["a","d","e","e"]]
//但矩阵中不包含字符串“abfb”的路径，因为字符串的第一个字符b占据了矩阵中的第一行第二个格子之后，路径不能再次进入这个格子。

//示例 1：
//输入：board =
// [["A","B","C","E"],
// ["S","F","C","S"],
// ["A","D","E","E"]], word = "ABCCED"
//输出：true

//示例 2：
//输入：board =
//[["a","b"],
//["c","d"]], word = "abcd"
//输出：false

//提示：
//
//1 <= board.length <= 200
//1 <= board[i].length <= 200


/**
 * @param String[][] $board
 * @param String $word
 * @return bool
 */
function exist($board, $word)
{
    for ($i = 0; $i < count($board); $i++)
    {
        for ($j = 0; $j < count($board[0]); $j++)
        {
            //从A开始试探,然后再从B开始
            $res = helper($board, $i, $j, $word, 0);
            if ($res) return true;
        }
    }
    return false;//不进入循环的情况
}

function helper($board, $i, $j, $word, $start)
{
    if ($start >= strlen($word))
    {
        //找到了 ==也可以,因为上一次调用是$start + 1所以这里能够和length相等
        return true;
    }
    //先确定范围,再判断$board[$i][$j]
    //数组越界、超出层级、已经选取过该字母、目标字母不匹配、匹配完成 都返回
    if ($i < 0 || $i >= count($board) || $j < 0 || $j >= count($board[0]) || $board[$i][$j] != $word[$start])
    {
        return false;
    }
    $c = $word[$start];//保存当前字符,之后进行还原
    $board[$i][$j] = "#";//表示这个字母已经找过了
    // var_dump($board);
    //也可以用方向数组,有一个方向找到就行
    $res = (helper($board, $i + 1, $j, $word, $start + 1) ||
        helper($board, $i - 1, $j, $word, $start + 1) ||
        helper($board, $i, $j + 1, $word, $start + 1) ||
        helper($board, $i, $j - 1, $word, $start + 1)
    );
    $board[$i][$j] = $c;//换回来
    return $res;
}


var_dump(exist(
    [
        ["a", "b"],
        ["c", "d"],
    ], 'abd'));