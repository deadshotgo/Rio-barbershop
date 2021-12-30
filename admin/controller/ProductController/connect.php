<?php

$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}

$result = mysqli_query($connect, " SELECT * FROM category;");
$category_arr = array();
while ($row = mysqli_fetch_array($result)) {
    $category_arr[] = $row;
}
