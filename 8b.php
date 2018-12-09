<?php
    $a=array(array(1,2),array(3,4));
    $b=array(array(5,6),array(7,8));
    $nr = count($a);
    $nc = count($a[0]);
    echo "Sum of A & B";
    echo "<br>";
    for($i=0;$i<2;$i++){
        for($j=0;$j<2;$j++)
            echo $a[$i][$j]+$b[$i][$j]." ";   
        echo "<br>";
    }
    echo "<br>";
    echo "Transpose of A";
    echo "<br>";
    for($i=0;$i<2;$i++){
        for($j=0;$j<2;$j++)
            echo $a[$j][$i];
        echo "<br>";
    }
    echo "<br>";
    echo "Transpose of B";
    echo "<br>";
    for($i=0;$i<2;$i++){
        for($j=0;$j<2;$j++)        
            echo $b[$j][$i];   
        echo "<br>";
    }
    echo "<br>";
    echo "Multiplication of 2 Matrices";
    for($i=0;$i<2;$i++){
        for($j=0;$j<2;$j++)
        {
            $c=0;
            for($k=0;$k<2;$k++)
                $c+=$a[$i][$k]*$b[$k][$j];       
                echo $c." ";
            }
            echo "<br>";
    }
?>