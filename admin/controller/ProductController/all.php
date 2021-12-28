<?php
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$result = mysqli_query($connect, " SELECT * FROM product;");


$user_data = array();
while ($row = mysqli_fetch_array($result)) {
    $user_data[] = $row;
}