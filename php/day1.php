<?php
// int folat string 都是最基本的类型 但是本省也会涉及到很多基础数据处理
$int = 1;
var_dump($int);
$float = 1.1;
var_dump($float);

$s = 'a';
var_dump($s);

$arr  = array("id" => 1);
$arr[1] = 2;

var_dump($arr);
// 在实际中id 是可以混合使用的  数组中
foreach($arr as $key => $value){
    echo($key."=>".$value);
    print("\n");
}

class Preson{
    private $name ;
    private $age;
    private $weigth;
}