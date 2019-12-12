<?php

// 获取二维数组里某字段相同的元素

$arr = array(
    '0' => array(
        'user_id'=>'0',
        'mobile_phone' => '1',
        'name' => '张三',
    ) ,
    '1' => array(
        'user_id'=>'1',
        'mobile_phone' => '2',
        'name' => '李四',
    ) ,
    '2' => array(
        'user_id'=>'2',
        'mobile_phone' => '3',
        'name' => '张三',
    ) ,
    '3' => array(
        'user_id'=>'3',
        'mobile_phone' => '6',
        'name' => '李四',
    ) ,
    '4' => array(
        'user_id'=>'4',
        'mobile_phone' => '5',
        'name' => '李四',
    ) ,
    '5' => array(
        'user_id'=>'5',
        'mobile_phone' => '2',
        'name' => '李四',
    ) ,
    '6' => array(
        'user_id'=>'6',
        'mobile_phone' => '7',
        'name' => '赵六',
    ) ,
    '7' => array(
        'user_id'=>'7',
        'mobile_phone' => '6',
        'name' => '赵六',
    )
);

/**
 * 根据一个字段获取相同子元素
 * @param $arr
 * @param $field
 * @return array
 */
function get_seem_array1($arr, $field) {
    $tmpArr = $res = $result = array();
    foreach($arr as $value){
        if(!in_array($value[$field],$tmpArr)){
            $tmpArr[] = $value[$field];
        }else{
            $res[] = $value[$field];
        }
    }
    foreach($arr as $key => $value){
        if(in_array($value[$field],$res)){
            $result[$key] = $value;
        }
    }
    return $result;
}

//var_dump(get_seem_array1($arr, 'mobile_phone'));
/**
 * 根据多个字段获取相同子元素
 * @param $arr
 * @param $field1
 * @param $field2
 * @return array
 */
function get_seem_array2($arr, $field1, $field2) {
    $tmpArr = $res = $result = array();

    foreach($arr as $value){
        if(!in_array($value[$field1] . '_' . $value[$field2],$tmpArr)){
            $tmpArr[] = $value[$field1] . '_' . $value[$field2];
        }else{
            $res[] = $value[$field1] . '_' . $value[$field2];
        }
    }
    foreach($arr as $key => $value){
        if(in_array($value[$field1] . '_' . $value[$field2],$res)){
            $result[$key] = $value;
        }
    }
    return $result;
}
var_dump(get_seem_array2($arr, 'mobile_phone', 'name'));
