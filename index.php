<?php
$arr = [
    0 => ['a' => '1', 'b' => '2', 'c' => '3', 'd' => '4', 'e' => '51'],
    1 => ['a' => '11', 'b' => '2', 'c' => '22', 'd' => '33', 'e' => '52'],
    2 => ['a' => '1', 'b' => '2', 'c' => '3', 'd' => '4', 'e' => '53'],
    3 => ['a' => '1', 'b' => '2', 'c' => '3', 'd' => '4', 'e' => '54'],
    4 => ['a' => '1', 'b' => '22', 'c' => '3', 'd' => '4', 'e' => '55'],
];
/*
 * 二位数组取最大值pv
 */
function getArrayMax($arr,$field)
{
    foreach ($arr as $k=>$v){
        $temp[]=$v[$field];
    }
    return max($temp);
}
var_dump(getArrayMax($arr, 'e'));die;
$res = [];

for( $i=0; $i < count($arr); $i++)
{
    for( $j=$i+1; $j < count($arr); $j++)
    {
        if($arr[$i]['a'] == $arr[$j]['a'] && $arr[$i]['b'] == $arr[$j]['b']) {
            $res[][$j] = $arr[$j];
        }
    }
}
var_dump($res);die;

$arr = array(
    '0' => array(
        'user_id'=>'0',
        'mobile_phone' => '1',
        'test' => '1',
    ) ,
    '1' => array(
        'user_id'=>'1',
        'mobile_phone' => '2',
        'test' => '1',
    ) ,
    '2' => array(
        'user_id'=>'2',
        'mobile_phone' => '3',
        'test' => '2',
    ) ,
    '3' => array(
        'user_id'=>'3',
        'mobile_phone' => '6',
        'test' => '2',
    ) ,
    '4' => array(
        'user_id'=>'4',
        'mobile_phone' => '5',
        'test' => '3',
    ) ,
    '5' => array(
        'user_id'=>'5',
        'mobile_phone' => '2',
        'test' => '3',
    ) ,
    '6' => array(
        'user_id'=>'6',
        'mobile_phone' => '7',
        'test' => '4',
    ) ,
    '7' => array(
        'user_id'=>'7',
        'mobile_phone' => '6',
        'test' => '4',
    )
);

$tmpArr = $res = $result = $tem = array();
foreach($arr as $key => $value){
    $tem = [];
    $tem[$key]['mobile_phone'] = $value['mobile_phone'];
    $tem[$key]['test'] = $value['test'];
    foreach ($tmpArr as $k => $v) {
        if (!judgeEqual($v,$tem)) {
            $tmpArr[] = $tem;
        } else {
            $res[] = $tem;
        }
    }
//    var_dump($res);die;

    /*if(!in_array($value['mobile_phone'],$tmpArr) && !in_array($value['test'],$tmpArr)){
        $tmpArr[$key]['mobile_phone'] = $value['mobile_phone'];
        $tmpArr[$key]['test'] = $value['test'];
        var_dump($tmpArr);die;
    }else{
        $res[] = $value['mobile_phone'];
        $res[] = $value['test'];
    }*/
}
var_dump($res);die;
foreach($arr as $key => $value){
    if(in_array($value['mobile_phone'],$res) && in_array($value['test'],$res)){
        $result[$key] = $value;
    }
}
