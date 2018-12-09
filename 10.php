<form action="10.php" method="POST">
    <input type=text name="USN" placeholder="u">
    <input type=text name="Name" placeholder="n">
    <input type=text name="Age" placeholder="a">
    <input type="submit">
</form>
<?php 
    $dbhost='localhost:3306';
    $dbname='student';
    $dbuser='root';
    $dbpass='password';
    $sql=new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $sql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if(count($_POST)!=0){
        $stmt=$sql->prepare('Insert into ds values(?,?,?)');
        $stmt->execute([$_POST['USN'],$_POST['Name'],$_POST['Age']]);
    }
    $result=$sql->query('Select * from ds;');
    $rows=$result->fetchAll();
    echo "Unsorted"."<br>";
    echo "<table border=3><tr><th>USN</th><th>Name</th><th>Age</th></tr>";
    foreach($rows as $i){
        echo "<tr><td>".$i[0]."</td><td>".$i[1]."</td><td>".$i[2]."</td></tr>";
    }
    for($i=0;$i<count($rows)-1;$i++){
        $minindex=$i+1;
        for($j=$i+1;$j<count($rows);$j++)
            {
                if(strcmp($rows[$j],$rows[$minindex])<0)
                {
                    $minindex=$j;
                }
            }
        $temp=$rows[$i];
        $rows[$i]=$rows[$minindex];
        $rows[$minindex]=$temp;
    }
    echo "Sorted"."<br>";
    echo "<table border=3><tr><th>USN</th><th>Name</th><th>Age</th></tr>";
    foreach($rows as $i){
        echo "<tr><td>".$i[0]."</td><td>".$i[1]."</td><td>".$i[2]."</td></tr>";
    }
?>