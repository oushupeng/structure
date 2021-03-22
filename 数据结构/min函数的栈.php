<?php

class MinStack
{
    protected $arr1;
    protected $arr2;

    /**
     * initialize your data structure here.
     */
    function __construct()
    {
        $this->arr1 = new SplStack();
        $this->arr2 = new SplStack();
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        $this->arr1->push($x);
        if ($this->arr2->isEmpty() || $this->arr2->top() >= $x)
        {
            $this->arr2->push($x);
        }
    }

    /**
     * @return NULL
     */
    function pop()
    {
        if ($this->arr2->top() == $this->arr2->top())
        {
            $this->arr2->pop();
        }
        $this->arr1->pop();
    }

    /**
     * @return Integer
     */
    function top()
    {
        return $this->arr1->top();
    }

    /**
     * @return bool
     */
    function min()
    {
//        if ($this->arr1->isEmpty())
//        {
//            return null;
//        }
//
//        $this->arr1->rewind();
//        $temp = $this->arr1->current();
//
//        if ($this->arr1->count() == 1)
//        {
//            return $temp;
//        }
//
//        $this->arr1->next();
//        while ($this->arr1->valid())
//        {
//            if ($temp > $this->arr1->current())
//            {
//                $temp = $this->arr1->current();
//            }
//            $this->arr1->next();
//        }
//
//        return $temp;
        if (!$this->arr2->isEmpty())
        {
            return $this->arr2->top();
        }
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->min();
 */

$obj = new MinStack();
$obj->push(2);
$obj->push(0);
$obj->push(3);
$obj->push(0);
$ret_1 = $obj->min();
$ret_2 = $obj->pop();
$ret_3 = $obj->min();
$ret_4 = $obj->pop();
$ret_5 = $obj->min();
$ret_6 = $obj->pop();
$ret_7 = $obj->min();
var_dump($ret_1);
var_dump($ret_2);
var_dump($ret_3);
var_dump($ret_4);
var_dump($ret_5);
var_dump($ret_6);
var_dump($ret_7);