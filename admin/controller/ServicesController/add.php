<?php


session_start();
$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$title = $_POST['title'];
$time = $_POST['time'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `services` (`id`, `title`, `time`, `price`) VALUES (NULL, '$title', '$time', '$price')");

$_SESSION['add'] = 'Регистрация пршла успешно';
header('location: /admin/services/add.php');