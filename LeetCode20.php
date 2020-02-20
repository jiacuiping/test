<?php

/**
 * 有效的括号
 *
给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。

有效字符串需满足：

左括号必须用相同类型的右括号闭合。
左括号必须以正确的顺序闭合。
注意空字符串可被认为是有效字符串。

示例 1:
输入: "()"
输出: true
 *
 *
示例 2:
输入: "()[]{}"
输出: true
 *
 *
示例 3:
输入: "(]"
输出: false
 *
 *
示例 4:
输入: "([)]"
输出: false
 *
 *
示例 5:
输入: "{[]}"
输出: true

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/valid-parentheses
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * *
 */
$s = "()";
$s = "()[]{}";
$s = "(]";
$s = "([)]";
$s = "{[]}";
$s = "";
/*function isValid($s) {
    $reg = "/(\(\)|\{\}|\[\])/";
    $flag = preg_match($reg, $s);
    if($s != "" && !$flag) {
        return false;
    }
    while (preg_match($reg, $s)) {
        $s = preg_replace($reg, '', $s);
    }

    return !$s;
}*/

function isValid($s) {
    $arr = [];
    $hash = [
        '{'=>'}',
        '['=>']',
        '('=>')'
    ];
    $left = ['{','[','('];
    $right = ['}',']',')'];
    for($i = 0; $i < strlen($s); $i++){
        if(in_array($s[$i], $left)){
            $arr[] = $s[$i];
        }
        if(in_array($s[$i], $right)){
            if($hash[array_pop($arr)] != $s[$i]){
                return false;
            }
        }
    }
    if($arr == []){
        return true;
    }else{
        return false;
    }
}
var_dump(isValid($s));
