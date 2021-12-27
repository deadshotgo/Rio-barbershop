<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$id = $_POST['id'];
$name = $_POST['name'];
$time = $_POST['time_work'];
$text = $_POST['text'];

$path = 'uploads/' . time() . $_FILES['full_avatar']['name'];
$path2 = 'uploads/' . time() . $_FILES['full_se']['name'];
move_uploaded_file($_FILES['full_avatar']['tmp_name'], '../' . $path);
move_uploaded_file($_FILES['full_se']['tmp_name'], '../' . $path2);

$result = mysqli_query($connect, "UPDATE employeer SET name = '$name', experience = '$time', text = '$text', 	certificate = '$path2', avatar = '$path'  WHERE id = '$id' ");
$_SESSION['edit'] = 'Картинку видалено';
header('Location: /admin/employee/all.php');
