<?php

$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if(!$connect) {
    die("error mysql");
}

$email = $_POST['email'];
$password = $_POST['password'];


$result = mysqli_query($connect, "SELECT * FROM admin WHERE email = '$email' AND password = '$password' ");


if(mysqli_num_rows($result) != 0) {
    $time = time()+60*60*24*365*10;
    setcookie('admin', 'admin', $time, "/");
    header('Location: /admin/index.php');

} else {
    die("error");
}

