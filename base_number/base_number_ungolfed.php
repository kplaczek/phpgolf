<?php 
define('NUM', '736,3
278,33
544,14
543,17
263,28
655,2
616,27
655,2
691,19
105,9
500,17
747,17
934,24
632,23
97,23
267,31
665,21
729,9
911,11
655,8
24,12
190,24
40,31
655,27
357,28
938,31
205,25
304,6
335,34
755,17
553,2');

$range = array_merge(range(0,9),range('a','z'));
foreach(explode("\n", NUM) as $line){
    list($num, $base) = split(',', $line);
    $converted = '';
    while($num >= $base){
        $tmp = $num % $base;
        $converted = $range[$tmp].$converted;
        $num =intval($num/$base);
    }
    echo $range[$num].$converted."\n";
}