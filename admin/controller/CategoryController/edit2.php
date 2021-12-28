<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$id = $_POST['id'];
$title = $_POST['title'];

$result = mysqli_query($connect, "UPDATE category SET title = '$title' WHERE id = '$id' ");
$_SESSION['edit'] = 'ghj';
header('Location: /admin/category/all.php');
