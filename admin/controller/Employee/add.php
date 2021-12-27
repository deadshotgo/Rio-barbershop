<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$name = $_POST['name'];
$time = $_POST['time_work'];
$text = $_POST['text'];



$path = 'uploads/' . time() . $_FILES['full_avatar']['name'];
$path2 = 'uploads/' . time() . $_FILES['full_se']['name'];
move_uploaded_file($_FILES['full_avatar']['tmp_name'], '../' . $path);
move_uploaded_file($_FILES['full_se']['tmp_name'], '../' . $path2);

mysqli_query($connect, "INSERT INTO `employeer` (`id`, `name`, `experience`, `text`, `certificate`, `avatar`) VALUES (NULL, '$name', '$time', '$text', '$path2', '$path')");
$_SESSION['message'] = 'Регистрация пршла успешно';
header('location: /admin/employee/all.php');
