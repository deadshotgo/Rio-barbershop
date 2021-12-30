<?php
session_start();
$connect = mysqli_connect("fh445719.mysql.tools", "fh445719_root", "Riobarber12", "fh445719_riobarbershoptwo");

if(!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
$id = $_POST['id'];
$price = $_POST['price'];
$cat_id = $_POST['category'];




        $path = 'uploads/' . time() . $_FILES['full_d']['name'];
        move_uploaded_file($_FILES['full_d']['tmp_name'], '../' . $path);
        $result = mysqli_query($connect, "UPDATE product SET price = '$price', id_category = '$cat_id',scr = '$path'  WHERE id = '$id' ");


$_SESSION['edit'] = 'fgh';
header('Location: /admin/product/all.php');
