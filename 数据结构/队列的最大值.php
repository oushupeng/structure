<?php

//队列的最大值
//请定义一个队列并实现函数 max_value 得到队列里的最大值，要求函数max_value、push_back 和 pop_front 的均摊时间复杂度都是O(1)。
//
//若队列为空，pop_front 和 max_value 需要返回 -1
//
//示例 1：
//
//输入:
//["MaxQueue","push_back","push_back","max_value","pop_front","max_value"]
//[[],[1],[2],[],[],[]]
//输出:[null,null,null,2,1,2]
//示例 2：
//
//输入:
//["MaxQueue","pop_front","max_value"]
//[[],[],[]]
//输出:[null,-1,-1]
//
//限制：
//
//1 <= push_back,pop_front,max_value的总操作数 <= 10000
//1 <= value <= 10^5

class MaxQueue
{
    protected $arr1;
    protected $arr2;

    /**
     */
    function __construct()
    {
        $this->arr1 = [];
        $this->arr2 = [];
    }

    /**
     * @return Integer
     */
    function max_value()
    {
        return $this->arr2 ? reset($this->arr2) : -1;
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    function push_back($value)
    {
        $this->arr1[] = $value;
        if ($this->arr2)
        {
            $len = count($this->arr2) - 1;
            for ($i = $len; $i >= 0; $i--)
            {
                if ($this->arr2[$i] < $value)
                {
                    array_pop($this->arr2);
                }
            }
        }
        $this->arr2[] = $value;
    }

    /**
     * @return Integer
     */
    function pop_front()
    {
        if (!$this->arr1) return -1;
        if (reset($this->arr1) == reset($this->arr2))
        {
            array_shift($this->arr2);
        }
        return array_shift($this->arr1);
    }
}

$obj = new MaxQueue();
$obj->push_back(1);
$obj->push_back(2);
var_dump($obj->max_value());
print_r(1);


//方法二：
//class MaxQueue2
//{
//    protected $arr1;
//
//    /**
//     */
//    function __construct()
//    {
//        $this->arr1 = [];
//    }
//
//    /**
//     * @return Integer
//     */
//    function max_value()
//    {
//        return $this->arr1 ? max($this->arr1) : -1;
//    }
//
//    /**
//     * @param Integer $value
//     * @return NULL
//     */
//    function push_back($value)
//    {
//        $this->arr1[] = $value;
//    }
//
//    /**
//     * @return Integer
//     */
//    function pop_front()
//    {
//        return $this->arr1 ? array_shift($this->arr1) : -1;
//    }
//}