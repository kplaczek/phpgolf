<?
for(;$x++ < 1e3;) {
    $past = [];
    $n = $x;
    while (1) {
        $total = 0;
        while ($n > 0) {
            $total += pow(($n % 10), 2);
            $n /= 10;
        }
        if ($total == 1){
            echo $x."\n";
            break;
        }
        if (array_key_exists($total, $past))
            break;
        $n = $total;
        $past[$total] = 0;
    }
}