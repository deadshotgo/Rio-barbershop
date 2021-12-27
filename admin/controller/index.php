<?php
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$count_ser = mysqli_query($connect, "SELECT * FROM services");
$row_cnt = mysqli_num_rows($count_ser);

$j = 0;
for($j; $j < $row_cnt; $j++) {
}

$count_img = mysqli_query($connect, "SELECT * FROM gallery");
$row_img = mysqli_num_rows($count_img);

$z = 0;
for($z; $z < $row_img; $z++) {
}

$count_emp = mysqli_query($connect, "SELECT * FROM employeer");
$row_emp = mysqli_num_rows($count_emp);

$x = 0;
for($x; $x < $row_emp; $x++) {
}