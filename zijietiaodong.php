<?php
$json1 = '{
  "app_id": "800000000001",
  "merchant_id": "1900000001",
  "timestamp": 1570694312,
  "sign_type": "MD5",
  "out_order_no": "201900000000000001",
  "product_code": "pay",
  "payment_type": "direct",
  "trade_type": "H5",
  "currency": "CNY",
  "total_amount":1,
  "subject": "测试订单",
  "body": "测试订单",
  "uid": "0000000000000001",
  "trade_time": 1570585744,
  "valid_time": 300,
  "version": "2.0",
  "wx_type": "MWEB",
  "wx_url": "https://wx.tenpay.com/xxx",
  "alipay_url": "app_id=2019000000000006&biz_content=xxxx"
}';
// alipay_url=app_id=2019000000000006&biz_content=xxxx&
//app_id=800000000001&
//body=测试订单&
//currency=CNY&
//merchant_id=1900000001&
//out_order_no=201900000000000001&
//payment_type=direct&
//product_code=pay&
//sign_type=MD5&
//subject=测试订单&
//timestamp=1570694312&total_amount=1&
//trade_time=1570585744&
//trade_type=H5&
//uid=0000000000000001&
//valid_time=300&
//version=2.0&
//wx_type=MWEB&
//wx_url=https://wx.tenpay.com/xxx
//"sign": "3d7bb8c404da20269b5b95ede0cdcfdb",

$json = '{
  "app_id": "800132911899",
  "merchant_id": "1900013291",
  "timestamp": time(),
  "sign_type": "MD5",
  "total_amount": 10000,
  "out_order_no": "SP2020032013501428117120140188",
  "product_code": "pay",
  "payment_type": "direct",
  "trade_type": "H5",
  "currency": "CNY",
  "subject": "超准心理评测",
  "version": "1.0",
  "body": "测试订单",
  "uid": "DVS6yJJ3iloXLEsV",
  "trade_time": 1584683421,
  "valid_time": "60",
  "alipay_url": "app_id=2021001140684107&method=alipay.trade.app.pay&charset=utf-8&sign_type=RSA2&timestamp=2020-03-20+13%3A50%3A21&version=1.0&notify_url=http%3A%2F%2Fwww.douyin.amibacs.com%2Findex.php%3Fm%3DPhoneApi%26c%3DProgram%26a%3Dnotify_url&biz_content=%7B%22subject%22%3A+%22%E8%B6%85%E5%87%86%E5%BF%83%E7%90%86%E8%AF%84%E6%B5%8B%22%2C%22body%22%3A+%22%E6%B5%8B%E8%AF%95%E8%AE%A2%E5%8D%95%22%2C%22out_trade_no%22%3A+%22%22%2C%22timeout_express%22%3A+%2230m%22%2C%22total_amount%22%3A+%22%22%2C%22product_code%22%3A%22QUICK_MSECURITY_PAY%22%7D&sign=",
 }';

$unsigned_str = 'alipay_url=app_id=2019000000000006&biz_content=xxxx&app_id=800000000001&body=测试订单&currency=CNY&merchant_id=1900000001&out_order_no=201900000000000001&payment_type=direct&product_code=pay&sign_type=MD5&subject=测试订单&timestamp=1570694312&total_amount=1&trade_time=1570585744&trade_type=H5&uid=0000000000000001&valid_time=300&version=2.0&wx_type=MWEB&wx_url=https://wx.tenpay.com/xxx';
//var_dump(md5($unsigned_str . 'a'));die;


$arr = json_decode($json1, true);



function getSignContent($params , $charset,$app_secret) {
    ksort($params);

//    var_dump($params);die;
    $str = http_build_query($params);
    $stringToBeSigned = "";
    $i = 0;
    foreach ($params as $k => $v) {
        if ($i == 0) {
            $stringToBeSigned .= "$k" . "=" . "$v";
        } else {
            $stringToBeSigned .= "&" . "$k" . "=" . "$v";
        }
        $i++;
    }
    /*foreach ($params as $k => $v) {
        if (false === $this->checkEmpty($v) && "@" != substr($v, 0, 1)) {
            // 转换成目标字符集
            $v = $this->characet($v, $charset);
            if ($i == 0) {
                $stringToBeSigned .= "$k" . "=" . "$v";
            } else {
                $stringToBeSigned .= "&" . "$k" . "=" . "$v";
            }
            $i++;
        }
    }*/

//    var_dump($stringToBeSigned);die;
    $stringToBeSigned = $stringToBeSigned.$app_secret;
    var_dump(md5($stringToBeSigned));die;
    unset ($k, $v);
    return $stringToBeSigned;
}

var_dump(getSignContent($arr, "utf-8", "a"));