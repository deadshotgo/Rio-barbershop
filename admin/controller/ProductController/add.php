<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$price = $_POST['price'];
$category = $_POST['category'];

$path = 'uploads/' . time() . $_FILES['full_avatar']['name'];
move_uploaded_file($_FILES['full_avatar']['tmp_name'], '../' . $path);
mysqli_query($connect, "INSERT INTO `product` (`id`, `price`, `scr`, `id_category`) VALUES (NULL, '$price', '$path', '$category')");
$_SESSION['add'] = 'Редак';
header('Location: /admin/product/all.php');