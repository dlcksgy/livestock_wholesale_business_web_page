<!-- 세션 기초... 생성하는법 -->

<?php
//세션 생성
session_start();
$_SESSION['name'] = "Kim";
$_SESSION['address'] = "Seoul";
$_SESSION['age'] = 18;

//세션 출력
echo "name = ".$_SESSION['name'];
echo "address = ".$_SESSION['address'];
echo "   age = ".$_SESSION['age'];


 ?>
