<?php
//定义一个函数，输入一个链表的头节点，反转该链表并输出反转后链表的头节点。
//
//示例:
//
//输入: 1->2->3->4->5->NULL
//输出: 5->4->3->2->1->NULL

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}

/**
 * 迭代（双指针）
 * @param ListNode $head
 * @return ListNode
 */
//function reverseList($head = null)
//{
//    $curr = new ListNode($head);//头结点
//    $prev = null;
//    while ($curr)
//    {
//        $next = $curr->next;
//        $curr->next = $prev;
//        $prev = $curr;
//        $curr = $next;
//    }
//
//    return $prev;
//}

/**
 * 递归
 * @param null $head
 */
//function reverseList($head = null)
//{
//    if (empty($head) || empty($head->next)) {
//        return $head;
//    }
//
//    $res = $this->reverseList($head->next);
//    $head->next->next = $head;
//    $head->next = null;
//    return $res;
//}