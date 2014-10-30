<?php

function read_html_file($file_name, $parser_array = null){
    $handle = fopen($file_name,'r');
    $buffer = fread($handle,filesize($file_name));
    @fclose($buffer);

    //开始查找替换
    if($parser_array){
        while(list($key,$value)=each($parser_array)){
            $k = "{" . $key . "}";
            $buffer = str_replace($k,$value,$buffer);//这一句是重点，把指定内容替换
        }
    }
    return $buffer;
}


function http_query_get($url, $params){
    $ch = curl_init();
    $params_str = http_build_query($params);
    curl_setopt($ch, CURLOPT_URL, $url . '?' . $params_str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;

    //return file_get_contents($url . '?' . $params);
}

function http_query_post($url, $params, $content_type = 'text/html'){
    $curlObj = curl_init();
    $options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => TRUE, //使用post提交
    CURLOPT_RETURNTRANSFER => TRUE, //接收服务端范围的html代码而不是直接浏览器输出
    CURLOPT_TIMEOUT => 4,
    CURLOPT_POSTFIELDS => $params, //post的数据
    CURLINFO_CONTENT_TYPE => $content_type
    );
    curl_setopt_array($curlObj, $options);
    $response = curl_exec($curlObj);
    curl_close($curlObj);
    return $response;
}
?>
