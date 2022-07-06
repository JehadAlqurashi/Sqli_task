<?php

include "database/database.php";
if($_SERVER['REQUEST_METHOD'] == "GET"){
    $val = $_GET['search'];
    $data = $connect->query("select * from users where name='$val'");
    if($data->num_rows){
        $data = $data->fetch_assoc();
        echo "Username : " . $data['name'] . "<br>";
        echo "Email : " . $data['email'] . "<br>";
        echo "Password : " .$data['password'] . "<br>";

    }else{
        echo "Username Not Found !";
    }
}
?>

<form action="" method="get">
    <input type="text" name="search" placeholder="name"><br><br>
    <input type="submit" value="search">
</form>