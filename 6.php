<?php
$f=fopen('count.txt','r');
$c=fread($f,25);
$c=$c+1;
echo "Visitor Number ".$c;
fclose($f);
$f=fopen('count.txt','w');
fwrite($f,$c);
?>