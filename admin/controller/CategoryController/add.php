<?php
session_start();
$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$title = $_POST['title'];

$result = mysqli_query($connect, "INSERT INTO `category` (`id`, `title`) VALUES (NULL, '$title')");
$_SESSION['add'] = 'hgh';
header('Location: /admin/category/all.php');