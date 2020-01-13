<?php

/**
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。

示例 1:

输入: 123
输出: 321
 示例 2:

输入: -123
输出: -321
示例 3:

输入: 120
输出: 21
注意:

假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−2³¹,  2³¹ − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/reverse-integer
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 */

/*
public int reverse(int x) {
    long rst=0;
    while(x!=0){
        rst= rst*10+ x%10;
        x=x/10;

    }
    if((int)rst!=rst){
        return 0;

    }else{
        return (int)rst;
    }
}


// 输入 123
int reverse(int x){
    int max = 0x7fffffff;
    long b = 0;
    while (x != 0) {           // 123       12          1
        b = b * 10 + x % 10;   // 0+3=3     30+2=32     320+1=321
        x = x / 10;            // 12        1           0
    }
    return (b > max || b < (-1 * (max + 1))) ? 0 : b;
}

// 输入 123
int reverse(int x){
    int max = 0x7fffffff;
    long b = 0;
    while (x != 0) {           // 123         3          1
        b = b * 10 + x % 10;   // 0+12=12     120+0=120     320+1=321
        x = x / 10;            // 3           3           0
    }
    return (b > max || b < (-1 * (max + 1))) ? 0 : b;
}



int reverse(int x) {
    int rev = 0;
    while (x != 0) {
        int pop = x % 10;
        x /= 10;
        if (rev > INT_MAX/10 || (rev == INT_MAX / 10 && pop > 7)) return 0;
        if (rev < INT_MIN/10 || (rev == INT_MIN / 10 && pop < -8)) return 0;
        rev = rev * 10 + pop;
    }
    return rev;
}

*/
//$number = 123;
//$number = -123;
//$number = 120;
$number = 90000;
//$number = 1534236469;



function reverseInteger($number)
{
    // 数值范围
    $max = pow(2, 31) - 1;
//    $min = pow(-2, 31);
    $min = ($max + 1) * -1;

    $res = 0;

    // 判断是否是负数
    $flag = true;
    if($number < 0) {
        $number = abs($number);
    } else {
        $flag = false;
    }

    // 反转
    $res = strrev($number);

    // 去0
    $res = trim($res, '0');

    if($flag) {
        $res = $res * -1;
    }


    // 判断是否溢出
    if($res < $min || $res > $max) {
        $res = 0;
    }

    return intval($res);

}


function reverse($x) {
    $length=strlen(abs($x));//长度
    //$remainder=$x;//余数
    $return=0;//输出
    $big=pow(10,$length-1);
    $small=1;
    for($temp=$length-1;$temp>=0;$temp--){
        $number=(int)($x/$big);
        $x-=$number*$big;
        $return+=$number*$small;
        $big/=10;
        $small*=10;
    }

    if($return>pow(-2,31)&&$return<(pow(2,31)-1)){
        return $return;
    }else{
        return 0;
    }
}

function reverse1 ($x) {
    $str = (string)$x;
    $str = strrev($str);

    $str = $x < 0 ? -(int)$str : (int)$str;
    if((-pow(2,31)) > $str || (pow(2,31)-1) < $str){
        return 0;
    }
    return $str;
}
var_dump(reverse1($number));