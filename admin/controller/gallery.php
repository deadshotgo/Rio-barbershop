<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

$path = 'uploads/' . time() . $_FILES['full_scr']['name'];


move_uploaded_file($_FILES['full_scr']['tmp_name'], '../' . $path);

mysqli_query($connect, " INSERT INTO `gallery` (`id`, `scr`) VALUES (NULL, '$path') ");
$_SESSION['message'] = 'Регистрация пршла успешно';
header('location: /admin/gallery/add.php');
