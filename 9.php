<?php
$states="Mississippi Alabama Texas Massachusetts Kansas";
$each=explode(' ',$states);
$all=array(null,null,null,null);
foreach ($each as $i){
    if(preg_match('/.*xas$/',$i))
        $all[0]=$i;
    else if(preg_match('/^k.*s$/i',$i))
        $all[1]=$i;
    else if(preg_match('/^m.*s$/i',$i))
        $all[2]=$i;
    else if(preg_match('/.*a$/i',$i))
        $all[3]=$i;
} 
for($i=0;$i<4;$i++)
    echo $all[$i]."<br>";
?>