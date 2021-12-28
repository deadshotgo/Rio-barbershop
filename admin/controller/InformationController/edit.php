<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if (!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$phone = $_POST['phone'];
$addres = $_POST['addres'];
$Graf = $_POST['Graf'];

mysqli_query($connect, "UPDATE information SET phone = '$phone', addres ='$addres', schedule ='$Graf' ");
$_SESSION['edit'] = 'Редак';
header('Location: /admin/information/index.php');