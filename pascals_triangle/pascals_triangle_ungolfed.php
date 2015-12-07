<?php
for ($n=20,$i=1;$i<=$n; $i++)
{
    $row = array();
    $row[] = 1;
    $t = str_repeat('   ',$n-$i);
    for ($j=0; $j<$i; $j++)
    {
        if ($j)
        {
            $row[] = $prev[$j-1]+$prev[$j];
        }
        $t .= str_pad($row[$j],6);
    }
    $o .=  trim($t,'+')."\n";
    $row[] = 0;
    $prev = $row;
}
echo $o;
