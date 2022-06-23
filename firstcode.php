<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my first php code</h1>
<?php

    // $colors=["red","green","blue","yellow","purple"];
    // echo "[";
    // foreach($colors as $color){
    //     echo $color.", ";
    // }
    // echo "]";

    // echo "<br/>";
    // sort($colors);
    // echo "[";
    // foreach($colors as $color){
    //     echo $color.", ";
    // }
    // echo "]";






    // $new_colors=["red","green","blue","brown","orange"];
    // $containers=array_intersect($colors,$new_colors);
    // // sort($colors);
    // print_r($containers);
    // $a_matrix=[['a','b','c'],['d','e','f'],['g','h','i'],['j','k','l']];
    // $b_matrix=[];
    // foreach($a_matrix as $key_row=>$val){
    //     foreach($val as $key_col=>$col){
    //         $b_matrix[$key_col][$key_row]=$col;
    //     }
    // }

    // print_r($b_matrix);

    // date_default_timezone_set("Asia/Phnom_Penh");
    // $a=date("H");

    // echo $a;


    // $arr=["dara","Tevi"];
    // $arr_new=["name"=>"Sok","age"=>23,"gender"=>"male"];
    // $arr_b=array(
    //     "name"=>"Bopha",
    //     "age"=>14,
    //     "gender"=>"Female"

    // );

    // foreach($arr_b as $val_a){
    //     echo "$val_a<br/>";
    // }

    // $arr_p = array(
    //     "dog1"=>array(
    //         "name"=>"Kiki",
    //         "age"=>"2",
    //         "gender"=>"female"
    //     ),
    //     "dog2"=>array(
    //         "name"=>"Toni",
    //         "age"=>1,
    //         "gender"=>"male"
    //     )
    //     );
    
    // foreach($arr_p as $dogs){
    //     echo "<h2> Dogs</h2>";
    //     foreach($dogs as $dog){
    //         echo "$dog-->";
    //     }
    //     echo "<br/>";
    // }

    // phpinfo();

    // $arr=[4,12,31,23,7,54,13,8,18];
    // $odd = array();
    // $even = array();
    // foreach ($arr as $value) {
    //     if ($value % 2 == 0) {
    //         $even[] = $value;
    //     } else {
    //         $odd[] = $value;
    //     }
    // }
    // print_r($arr);
    // echo "<br/>";
    // print_r($odd);
    // echo "<br/>";
    // print_r($even);
        // $a=rand(1,6);
        // echo $a;

       
?>  

    <form action="index.php" method="post">
        <label for="" >Username</label>
        <input type="text"  name="username" id="username" placeholder="Username">
        <input type="submit"/>  
    </form>
</body>
</html>