<?php

/**
 * 最长公共前缀
 *
编写一个函数来查找字符串数组中的最长公共前缀。

如果不存在公共前缀，返回空字符串 ""。

示例 1:
输入: ["flower","flow","flight"]
输出: "fl"
 *
 *
示例 2:
输入: ["dog","racecar","car"]
输出: ""
解释: 输入不存在公共前缀。
 *
 *
说明:
所有输入只包含小写字母 a-z 。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/longest-common-prefix
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 */
$strs = ["flower","flow","flight"];
//$strs = ["abcgde","abcgde","abctge"];
//$strs = ["dog","racecar","car"];
function longestCommonPrefix($strs) {
    $res = "";
    $same = [];
    foreach ($strs as $key => $value) {
        $temp = str_split($value);
        if(!empty($same)) {
            $same = array_intersect_assoc($same, $temp);
            if(empty($same)) {
                $res = "";
                break;
            }
        } else {
            $same = $temp;
        }
    }
    if(!array_key_exists(0, $same)) {
        return "";
    }

    for ($i = 0; $i < count($same); $i++) {
        if(isset($same[$i]) && isset($same[$i+1])) {
            $res .= $same[$i];
        } elseif (isset($same[$i])) {
            $res .= $same[$i];
        }
    }
    return $res;
}
var_dump(longestCommonPrefix($strs));
