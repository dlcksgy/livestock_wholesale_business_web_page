<?php

session_start(); //gets session id from cookies, or prepa

if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists

?>

<a href="/test_login.php"><h1>Login</h1></a>

<?php

} else {

  echo "Hi, " . $_SESSION['login'];

?>

<a href="/test_logout.php">Logout</a>

<?php

}

?>
