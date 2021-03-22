<?php
//输入一个链表的头节点，从尾到头反过来返回每个节点的值（用数组返回）。
//
//输入：head = [1,3,2]
//输出：[2,3,1]

class ListNode
{
    public $val = 0;
    public $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}

//先入栈再出
function reversePrint($head)
{
    $arr = new SplStack();
    while ($head)
    {
        $arr->push($head->val);
        $head = $head->next();
    }

    $aa = [];
    while (!$arr->isEmpty())
    {
        $aa[] = $arr->pop();
    }

    return $aa;
}

//    function reversePrint($head)
//    {
//        $aa = [];
//        while ($head!=null) {
//            array_unshift($aa, $head->val);
//            $head=$head->next;
//        }
//        return $aa;
//    }
//
//    reversePrint(1);
//    reversePrint(3);
//    reversePrint(3);
//if(!$head->next) return [$head->val];
//
//$arr=$this->reversePrint($head->next);
//$arr[]=$head->val;
//
//return $arr;
