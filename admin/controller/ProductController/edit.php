<?php

$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$id = $_POST['id'];


$result = mysqli_query($connect, "SELECT * FROM product WHERE id='$id'");


$user_data = array();
while ($row = mysqli_fetch_array($result)) {
    $user_data[] = $row;
}




