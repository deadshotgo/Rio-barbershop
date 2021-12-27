<?php
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$result = mysqli_query($connect, " SELECT * FROM employeer;");

$row_cnt = mysqli_num_rows($result);
$user_data1 = array();
while ($row = mysqli_fetch_array($result)) {
    $user_data1[] = $row;
}
