<?php

$connect = mysqli_connect("localhost", "root", "", "rio_barbershop");

if (!$connect) {
    die("Mysql no work,pleas check connect mysql");
}
