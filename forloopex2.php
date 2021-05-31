<?php

$i=1;
$j=1;
echo $i;
echo "<br/>$j";
    for($a=1;$a<9;$a++)
    {
        $k=$i+$j;
        $i=$j;
        $j=$k;
        echo "<br/> $k";
    }