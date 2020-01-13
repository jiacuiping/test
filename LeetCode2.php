<?php

/**
 * 给出两个 非空 的链表用来表示两个非负的整数。其中，它们各自的位数是按照 逆序 的方式存储的，并且它们的每个节点只能存储 一位 数字。
 * 如果，我们将这两个数相加起来，则会返回一个新的链表来表示它们的和。
 * 您可以假设除了数字 0 之外，这两个数都不会以 0 开头。
 *
 * 示例：
 * 输入：(2 -> 4 -> 3) + (5 -> 6 -> 4)
 * 输出：7 -> 0 -> 8
 * 原因：342 + 465 = 807
 *
 */

$l1 = [2, 4, 3];
$l2 = [5, 6, 4];


function addTwoNumbers($l1, $l2)
{
    /*$l1 = array_reverse($l1);
    $l2 = array_reverse($l2);*/
    $num1 = '';
    $num2 = '';
    for($i = count($l1)-1; $i >= 0; $i--) {
        $num1 .= $l1[$i];
    }
    for($j = count($l2)-1; $j >= 0; $j--) {
        $num2 .= $l2[$j];
    }
    $sum = intval($num1) + intval($num2);
    $res = str_split($sum);
    return $res;
}
var_dump(addTwoNumbers($l1, $l2));