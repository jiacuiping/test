<?php

/**
判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。

示例 1:
输入: 121
输出: true
 *
 *
示例 2:
输入: -121
输出: false
解释: 从左向右读, 为 -121 。 从右向左读, 为 121- 。因此它不是一个回文数。
 *
 *
示例 3:
输入: 10
输出: false
解释: 从右向左读, 为 01 。因此它不是一个回文数。
 *
 *
进阶:
你能不将整数转为字符串来解决这个问题吗？

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/palindrome-number
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 */
//$x = 1221;
//$x = -121;
$x = 10;

/*function isPalindrome($x) {
    $reverse = strrev($x);
    if($x >= 0 && $x == (int)$reverse) {
        return true;
    } else {
        return false;
    }
}*/

/*function isPalindrome($x) {
    if($x < 0) {
        return false;
    }

    $number = $x;
    $res = 0;
    while ($number != 0) {                           // 121      12          1
        $res = $res * 10 + $number % 10;   // 0+1=1    10+2=12     120+1=121
        $number = intval($number / 10);         // 12       1           0
    }

    return $res === $x ? true : false;
}*/

function isPalindrome($x) {
    if ($x == strrev($x)) {
        return true;
    } else {
        return false;
    }
}
var_dump(isPalindrome($x));