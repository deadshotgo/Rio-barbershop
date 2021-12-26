<?php


session_start();
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");


$id = $_POST['id'];


$result = mysqli_query($connect, "SELECT * FROM employeer WHERE id='$id'");

$user_data = array();
while ($row = mysqli_fetch_array($result)) {
    $user_data[] = $row;
}

