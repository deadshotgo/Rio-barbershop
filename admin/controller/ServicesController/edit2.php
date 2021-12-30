<?php
session_start();
$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$title = $_POST['title'];
$time = $_POST['time'];
$price = $_POST['price'];
$id = $_POST['id'];

$result = mysqli_query($connect, "UPDATE services SET title = '$title', time= '$time', price = '$price'  WHERE id = '$id' ");
$_SESSION['edit'] = 'Картинку видалено';
header('Location: /admin/services/all.php');
