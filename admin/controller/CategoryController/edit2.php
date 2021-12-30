<?php
session_start();
$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$id = $_POST['id'];
$title = $_POST['title'];

$result = mysqli_query($connect, "UPDATE category SET title = '$title' WHERE id = '$id' ");
$_SESSION['edit'] = 'ghj';
header('Location: /admin/category/all.php');
