<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");


$id = $_POST['id'];

    mysqli_query($connect, " DELETE FROM gallery WHERE id = '$id'");
$_SESSION['delete'] = 'Картинку видалено';
header('location: /admin/gallery/all.php');