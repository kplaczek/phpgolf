<?
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