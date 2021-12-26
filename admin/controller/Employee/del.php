<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");


$id = $_POST['id'];

mysqli_query($connect, " DELETE FROM employeer WHERE id = '$id'");
$_SESSION['delete'] = 'Видалено';
header('location: /admin/employee/all.php');