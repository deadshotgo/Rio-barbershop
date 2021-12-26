<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

$title = $_POST['title'];
$time = $_POST['time'];
$price = $_POST['price'];
$id = $_POST['id'];

$result = mysqli_query($connect, "UPDATE services SET title = '$title', time= '$time', price = '$price'  WHERE id = '$id' ");
$_SESSION['edit'] = 'Картинку видалено';
header('Location: /admin/services/all.php');
