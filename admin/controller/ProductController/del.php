<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$id = $_POST['id'];

mysqli_query($connect, " DELETE FROM product WHERE id = '$id'");
$_SESSION['delete'] = 'Видалено';
header('location: /admin/product/all.php');