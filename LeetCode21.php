<?php

/**
 * 合并两个有序链表
 *
将两个有序链表合并为一个新的有序链表并返回。新链表是通过拼接给定的两个链表的所有节点组成的。 

示例：

输入：1->2->4, 1->3->4
输出：1->1->2->3->4->4

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/merge-two-sorted-lists
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * *
 */

include ("./LinkList.php");
$l1 = "";
$l2 = "";
$list = new LinkList(0);
$head = $list;
function mergeTwoLists($l1, $l2) {
    $list = new LinkList(0);
    $head = $list;
    //l1 和 l2 都为空时 跳出循环
    if($l1 || $l2){
        while ($l1 || $l2){//比较大小  每次返回下一级
            if(!$l1){//没有l1时  执行l2 剩余部分
                $head->next = $l2;
                $head = $head->next;
                $l2 = $l2->next;
            }else if(!$l2){//没有l2时  执行l1 剩余部分
                $head->next = $l1;
                $head = $head->next;
                $l1 = $l1->next;
            }else if($l1->val < $l2->val){//比较大小 l1->val小的话  将l1连接到head  然后l1自动走到next
                $head->next = $l1;
                $head = $head->next;
                $l1 = $l1->next;
            }else{//比较大小  将l2连接到head  然后l2自动走到next
                $head->next = $l2;
                $head = $head->next;
                $l2 = $l2->next;
            }
        }
    }
    $list = $list->next;
    return $list;
}
/*function mergeTwoLists($l1, $l2) {
    $list = new ListNode(0);
    $head = $list;
    //l1 和 l2 都为空时 跳出循环
    if($l1 || $l2){
        while ($l1 || $l2){//比较大小  每次返回下一级
            if(!$l1){//没有l1时  执行l2 剩余部分
                $head->next = $l2;
                $head = $head->next;
                $l2 = $l2->next;
            }else if(!$l2){//没有l2时  执行l1 剩余部分
                $head->next = $l1;
                $head = $head->next;
                $l1 = $l1->next;
            }else if($l1->val < $l2->val){//比较大小 l1->val小的话  将l1连接到head  然后l1自动走到next
                $head->next = $l1;
                $head = $head->next;
                $l1 = $l1->next;
            }else{//比较大小  将l2连接到head  然后l2自动走到next
                $head->next = $l2;
                $head = $head->next;
                $l2 = $l2->next;
            }
        }
    }
    $list = $list->next;
    return $list;
}*/
var_dump(mergeTwoLists($l1, $l2));
