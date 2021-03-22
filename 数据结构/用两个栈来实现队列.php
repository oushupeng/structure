<?php
// 用两个栈实现一个队列。队列的声明如下，请实现它的两个函数 appendTail 和 deleteHead ，分别完成在队列尾部插入整数和在队列头部删除整数的功能。(若队列中没有元素，deleteHead 操作返回 -1 )

// 输入：
// ["CQ ueue","appendTail","deleteHead","deleteHead"]
// [[],[3],[],[]]
// 输出：[null,null,3,-1]
// 示例 2：

// 输入：
// ["CQueue","deleteHead","appendTail","appendTail","deleteHead","deleteHead"]
// [[],[],[5],[2],[],[]]
// 输出：[null,-1,null,null,5,2]

class CQueue
{
    protected $arr1;
    protected $arr2;

    /**
     */
    function __construct()
    {
        $this->arr1 = new SplStack();
        $this->arr2 = new SplStack();
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    function appendTail($value)
    {
        $this->arr1->push($value);
    }

    /**
     * @return Integer
     */
    function deleteHead()
    {

        if (!$this->arr2->isEmpty())
        {
            return $this->arr2->pop();
        }

        while (!$this->arr1->isEmpty())
        {
            $this->arr2->push($this->arr1->pop());
        }

        if ($this->arr2->isEmpty())
        {
            return -1;
        }

        return $this->arr2->pop();
    }
}

/**
 * Your CQueue object will be instantiated and called as such:
 * $obj = CQueue();
 * $obj->appendTail($value);
 * $ret_2 = $obj->deleteHead();
 */

$obj = new CQueue();
$obj->appendTail(3);
$ret_2 = $obj->deleteHead();