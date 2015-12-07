<?php
$e = "     ";
for ($n=20;$i<=$n; $i++)
{
    $row = array();
    $row[] = 1;
echo $s = str_repeat($e,($n-$i)/2);
    for ($j=0; $j<$i; $j++)
    {
        if ($j)
        {
            $row[] = $prev[$j-1]+$prev[$j];
            print($e);
        }
        echo str_pad($row[$j],5,' ',STR_PAD_LEFT);
    }
    echo "\n";
$row[] = 0;
$prev = $row;
echo $s;
}