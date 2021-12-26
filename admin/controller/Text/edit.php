<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");


$title = $_POST['title'];
$pid_title = $_POST['pid_title'];
$text = $_POST['text'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$add = mysqli_query($connect, "UPDATE text SET title = '$title', pid_title= '$pid_title', text = '$text', num1 = '$num1', num2 = '$num2', num3 = '$num3'  ");
$_SESSION['edit'] = 'Картинку видалено';
header('Location: /admin/text/index.php');


