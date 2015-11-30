<?php 
define('SRT', '698 303 266 45 887 193 45 558 224 820 929 6 612 927');
$a = explode(' ', SRT);
$c = count($a);
for($i = 0; $i < $c; $i++){
    for($j = 1; $j < $c; $j++){
        if($a[$j-1] > $a[$j]){
            list($a[$j-1], $a[$j]) = array($a[$j], $a[$j-1]);
        }
    }
}
echo implode(' ', $a);