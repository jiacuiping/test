<?php

/**
 * 罗马数字转整数
 *
罗马数字包含以下七种字符: I， V， X， L，C，D 和 M。

字符          数值
I             1
V             5
X             10
L             50
C             100
D             500
M             1000
例如， 罗马数字 2 写做 II ，即为两个并列的 1。12 写做 XII ，即为 X + II 。 27 写做  XXVII, 即为 XX + V + II 。

通常情况下，罗马数字中小的数字在大的数字的右边。但也存在特例，例如 4 不写做 IIII，而是 IV。数字 1 在数字 5 的左边，所表示的数等于大数 5 减小数 1 得到的数值 4 。同样地，数字 9 表示为 IX。这个特殊的规则只适用于以下六种情况：

I 可以放在 V (5) 和 X (10) 的左边，来表示 4 和 9。
X 可以放在 L (50) 和 C (100) 的左边，来表示 40 和 90。 
C 可以放在 D (500) 和 M (1000) 的左边，来表示 400 和 900。
 *
给定一个罗马数字，将其转换成整数。输入确保在 1 到 3999 的范围内。

示例 1:
输入: "III"
输出: 3
 *
 *
示例 2:
输入: "IV"
输出: 4
 *
 *
示例 3:
输入: "IX"
输出: 9
 *
 *
示例 4:
输入: "LVIII"
输出: 58
解释: L = 50, V= 5, III = 3.
 *
 *
示例 5:
输入: "MCMXCIV"
输出: 1994
解释: M = 1000, CM = 900, XC = 90, IV = 4.

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/roman-to-integer
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 */
$s = "I";
$s = "III";
$s = "IV";
$s = "IX";
$s = "LVIII";
$s = "MCMXCIV";
//$s = "D";
/*function romanToInt($s) {
    $res = 0;

    $arr1 = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
    $arr2 = ["IV" => 4, "IX" => 9, "XL" => 40, "XC" => 90, "CD" => 400, "CM" => 900];

    $arr = array_merge($arr1, $arr2);

    if(array_key_exists($s, $arr)) {
        return $arr[$s];
    }


    foreach ($arr2 as $key => $value) {
        $count = substr_count($s, $key);
        if($count != 0) {
            $s = str_replace($key, '', $s);
            $res += $count * $arr2[$key];
        }
    }

    foreach ($arr as $key => $value) {
        $count = substr_count($s, $key);
        if($count != 0) {
            $res += $count * $arr[$key];
        }
    }

    return $res;
}*/

function romanToInt($s) {
    $res = 0;

    $arr = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000,
        "IV" => 4, "IX" => 9, "XL" => 40, "XC" => 90, "CD" => 400, "CM" => 900];


    preg_match_all ("/(CM)|(CD)|(XC)|(XL)|(IX)|(IV)|(\w)/", $s, $temp);

    foreach ($temp[0] as $value) {
        $res += $arr[$value];
    }


    return $res;
}

/*function romanToInt($s) {
    $arr = array(
        'I'=>1,
        'V'=>5,
        'X'=>10,
        'L'=>50,
        'C'=>100,
        'D'=>500,
        'M'=>1000,
    );


    $tmp[] = str_split($s);
    $result = 0;
    for($i=0; $i<count($tmp[0]);$i++)
    {
        if($i>=1 && $arr[$tmp[0][$i]]>$arr[$tmp[0][$i-1]])
        {

            $result += $arr[$tmp[0][$i]]-2*$arr[$tmp[0][$i-1]];
        }
        else
        {
            $result += $arr[$tmp[0][$i]];
        }
    }
    return $result;
}*/
var_dump( romanToInt($s));die;

