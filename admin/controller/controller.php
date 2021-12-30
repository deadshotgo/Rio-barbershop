<?php

$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
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

