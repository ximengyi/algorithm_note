<?php


//冒泡排序
$arr = [2,5,1,6,5,3,29,23,8,9,1,4,7];

$count = count($arr);
for ($j=0;$j<$count-1;$j++){
    for($i=0; $i < $count-1-$j;$i++){
       $temp = $arr[$i];
       if($arr[$i] > $arr[$i+1]){
           $arr[$i] = $arr[$i+1];
           $arr[$i+1] = $temp;
       }
    }

}
var_dump($arr);