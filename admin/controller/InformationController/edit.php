<?php

session_start();
$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if (!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$phone = $_POST['phone'];
$addres = $_POST['addres'];
$Graf = $_POST['Graf'];

mysqli_query($connect, "UPDATE information SET phone = '$phone', addres ='$addres', schedule ='$Graf' ");
$_SESSION['edit'] = 'Редак';
header('Location: /admin/information/index.php');