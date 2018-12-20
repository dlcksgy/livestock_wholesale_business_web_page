<?php
$inteager = $_POST['inteager'];
echo '<h1>' . $inteager . '</h1>';
// $con = mysqli_connect("172.31.16.108/","root","dlcksgy78@");
echo("#debug1<br/>");
//php version : 7.2

//ec2-54-180-125-179.ap-northeast-2.compute.amazonaws.com , 172.31.16.108
// $mysqli = new mysqli("172.31.16.108", "root", "dlcksgy78@", "test");

// if($mysqli){
//     echo "MySQL 접속 성공";
// }else{
//     echo "MySQL 접속 실패";
// }


// echo "#debug2";

Check connection
if ($con)
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "no error";
}


//select db
$select_db = mysql_select_db("test_db", $link);
if(!$select_db){
    die("Fail : " . mysql_error());
}else {
    echo "Successed<br>";
}
echo("yeahaaaaaahoooo");
$sql = "INSERT INTO practice (inteager) VALUES (99999)";
  
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($con);

?>