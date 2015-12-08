<?php
for($i=1;$i<21;$i++){
    $data = array(1);
    for($j=0;$j<$i;$j++){
        if($j){
            $data[]=str_pad($prev[$j-1]+$prev[$j],5,' ',0);
        }
    }
    echo  str_repeat(' ',(20-$i)*3).join(' ', $data),"\n";
    $prev = $data;
}