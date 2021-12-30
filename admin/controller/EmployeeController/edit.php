<?php


session_start();
$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$id = $_POST['id'];


$result = mysqli_query($connect, "SELECT * FROM employeer WHERE id='$id'");

$user_data = array();
while ($row = mysqli_fetch_array($result)) {
    $user_data[] = $row;
}

