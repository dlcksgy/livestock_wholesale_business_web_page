<?php


$_name = 
$_psw =
$_phone_num =
$_age =
$conn = mysqli_connect("localhost", "root", "123456", "person");
mysqli_query($conn, "INSERT INTO `person`(`name`, `psw`, `phone_num`, `age`) VALUES ($_name, $_psw, $_phone_num, $_age)   ");


echo "suc";
?>
