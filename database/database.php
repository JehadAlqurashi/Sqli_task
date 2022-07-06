<?php

$connect = new mysqli("localhost","jehad","toor","jehad");


if($connect->error){
    echo $connect->error;
}