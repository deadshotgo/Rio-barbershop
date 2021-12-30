<?php


$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if (!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$result = mysqli_query($connect, " SELECT * FROM information;");


$user_data3 = array();
while ($row = mysqli_fetch_array($result)) {
    $user_data3[] = $row;
}