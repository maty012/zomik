<?php
for ($j=1;$j<=100;$j++) {
    $c=0;
    for ($i = 1; $i<= $j; $i++) {
        if ($j % $i == 0){ $c++;}}
    if ($c==2){ echo $j;}
}

echo "<br>";
