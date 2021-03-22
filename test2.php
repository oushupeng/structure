<?php

//数据流中的中位数
//如何得到一个数据流中的中位数？如果从数据流中读出奇数个数值，那么中位数就是所有数值排序之后位于中间的数值。如果从数据流中读出偶数个数值，那么中位数就是所有数值排序之后中间两个数的平均值。
//
//例如，
//[2,3,4]的中位数是 3
//[2,3] 的中位数是 (2 + 3) / 2 = 2.5
//设计一个支持以下两种操作的数据结构：
//void addNum(int num) - 从数据流中添加一个整数到数据结构中。
//double findMedian() - 返回目前所有元素的中位数。

//示例 1：
//输入：
//["MedianFinder","addNum","addNum","findMedian","addNum","findMedian"]
//[[],[1],[2],[],[3],[]]
//输出：[null,null,null,1.50000,null,2.00000]

//示例 2：
//输入：
//["MedianFinder","addNum","findMedian","addNum","findMedian"]
//[[],[2],[],[3],[]]
//输出：[null,null,2.00000,null,2.50000]
class MedianFinder
{

    private $arrA;
    private $arrB;

    /**
     * initialize your data structure here.
     */
    function __construct()
    {
        $this->arrA = [];
        $this->arrB = [];
    }

    /**
     * @param Integer $num
     * @return NULL
     */
    function addNum($num)
    {
        if (count($this->arrA) != count($this->arrB))
        {
            array_push($this->arrA, $num);
            array_push($this->arrB, array_pop($this->arrA));
        }
        else
        {
            array_push($this->arrB, -$num);
            array_push($this->arrA, array_pop($this->arrB));
        }
    }

    /**
     * @return Float
     */
    function findMedian()
    {
//        sort($this->arr);
//        $count = count($this->arr);
//        if ($count % 2 == 0)
//        {
//            $res = ($this->arr[$count / 2 - 1] + $this->arr[($count + 2) / 2 - 1]) / 2;
//        }
//        else
//        {
//            $res = $this->arr[(($count + 1) / 2) - 1];
//        }
//
//        return $res;

        if (count($this->arrA) != count($this->arrB))
        {
            return $this->arrA[0];
        }
        else
        {
            return ($this->arrA[0] - $this->arrB[0]) / 2;
        }
    }
}

//if len(self.A) != len(self.B):
//            heappush(self.A, num)
//            heappush(self.B, -heappop(self.A))
//        else:
//            heappush(self.B, -num)
//            heappush(self.A, -heappop(self.B))


//def __init__(self):
//        self.A = [] # 小顶堆，保存较大的一半
//        self.B = [] # 大顶堆，保存较小的一半
//
//    def addNum(self, num: int) -> None:
//        if len(self.A) != len(self.B):
//            heappush(self.B, -heappushpop(self.A, num))
//        else:
//            heappush(self.A, -heappushpop(self.B, -num))
//
//    def findMedian(self) -> float:
//        return self.A[0] if len(self.A) != len(self.B) else (self.A[0] - self.B[0]) / 2.0


/**
 * Your MedianFinder object will be instantiated and called as such:
 * $obj = MedianFinder();
 * $obj->addNum($num);
 * $ret_2 = $obj->findMedian();
 */

$obj = new MedianFinder();
$obj->addNum(10);
$obj->addNum(20);
$obj->addNum(30);
$obj->addNum(40);
$obj->addNum(50);
$obj->addNum(60);
var_dump($obj->findMedian());