<?php
    header("Content-type:text/html;charset=utf-8");
    $arr = array(
        array("id"=>1,"name"=>"一等奖","v" => 10),
        array("id"=>2,"name"=>"二等奖","v" => 20),
        array("id"=>3,"name"=>"三等奖","v" => 40),
        array("id"=>4,"name"=>"四等奖","v" => 60),
        array("id"=>5,"name"=>"五等奖","v" => 80),
        array("id"=>6,"name"=>"六等奖","v" => 160)
    );
    $sumRand = 0;
    foreach($arr as $key=>$value){
        $sumRand += $value["v"]; 
    }
    foreach($arr as $key=>$value){
        $randNum = mt_rand(1,$sumRand);
        if($randNum<=$value['v']){
            $res = $value['id'];
            print('id='.$res.'  '.$value['name']);
            break;
        } else{
            $sumRand -=$value['v'];
        }
    }
    
?>