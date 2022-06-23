<?php
    // $mysql = new mysqli("127.0.0.1","root","root","test_b");
    // $resuult = $mysql->query("select * from users where users.name="'drop database;.$_POST['name']);
    // $rows = $resuult->query();
   
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=test_b;port=3306","root","root");
        $stmt = $pdo->query("select*from users");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php 
        // while($rows= $resuult->fetch_assoc()){
        //     echo "<tr>";
        //     echo "<td>".$rows['name']."</td>";
        //     echo "<td>".$rows['email']."</td>";
        //     echo "</tr>";
        // }

        foreach($rows as $row){
            echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "</tr>";
        }
        ?>
    </table>
</body>
</html>