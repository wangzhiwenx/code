<?php

while(1){
    $url = 'http://hdact.linker.cc/bzyuntingActivity_new/share/single?correlateId=126767&columnId=15848647235270&providerCode=21010&version=4.0.9&appCode=21010';
    curl_get($url);
    sleep(1);
    echo "1";
}

function curl_get($url){
 
    $header = array(
        'Accept: application/json',
     );
     $curl = curl_init();
     //设置抓取的url
     curl_setopt($curl, CURLOPT_URL, $url);
     //设置头文件的信息作为数据流输出
     curl_setopt($curl, CURLOPT_HEADER, 0);
     // 超时设置,以秒为单位
     curl_setopt($curl, CURLOPT_TIMEOUT, 1);
  
     // 超时设置，以毫秒为单位
     // curl_setopt($curl, CURLOPT_TIMEOUT_MS, 500);
  
     // 设置请求头
     curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
     //设置获取的信息以文件流的形式返回，而不是直接输出。
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
     //执行命令
     $data = curl_exec($curl);
  
     // 显示错误信息
     if (curl_error($curl)) {
         print "Error: " . curl_error($curl);
     } else {
         // 打印返回的内容
         curl_close($curl);
     }
     return $data;
 }