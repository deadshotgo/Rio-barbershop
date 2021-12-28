<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$title = $_POST['title'];

$result = mysqli_query($connect, "INSERT INTO `category` (`id`, `title`) VALUES (NULL, '$title')");
$_SESSION['add'] = 'hgh';
header('Location: /admin/category/all.php');