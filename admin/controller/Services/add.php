<?php


session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$title = $_POST['title'];
$time = $_POST['time'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `services` (`id`, `title`, `time`, `price`) VALUES (NULL, '$title', '$time', '$price')");

$_SESSION['add'] = 'Регистрация пршла успешно';
header('location: /admin/services/add.php');