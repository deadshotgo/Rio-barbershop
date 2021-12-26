<?php
$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");


$result = mysqli_query($connect, " SELECT * FROM gallery;");


$user_data = array();
while ($row = mysqli_fetch_array($result)) {
$user_data[] = $row;
}