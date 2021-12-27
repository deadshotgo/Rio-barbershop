<?php
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$result = mysqli_query($connect, " SELECT * FROM services;");


$user_data = array();
while ($row = mysqli_fetch_array($result)) {
    $user_data[] = $row;
}

$limit_res = mysqli_query($connect, "SELECT * FROM services WHERE id > 0 LIMIT 6; ");

$lim = array();
while ($col = mysqli_fetch_array($limit_res)) {
    $lim[] = $col;
}