<form action="8a.php" method="POST">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="submit" name="op" value="+">
    <input type="submit" name="op" value="-">
    <input type="submit" name="op" value="*">
    <input type="submit" name="op" value="/">
</form>
<?php 
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $op=$_POST["op"];
    switch($op){
        case "+":echo "Sum".($n1+$n2);
                break;
        case "-":echo "Difference".($n1-$n2);
                break;
        case "*":echo "Product".($n1*$n2);
                break;
        case "/":echo "Division:".($n1/$n2);
                break;
    }
?>