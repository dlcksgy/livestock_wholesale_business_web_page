<?php

session_start();

//TODO: do not hardcode, get from database
const login = 'sungsu';
const password = 'sungsu';

if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
{
  if ($_POST['login'] === login && $_POST['password'] === password)
  {
    $_SESSION['login'] = $_POST['login']; //write login to server storage
    header('Location: /test_index.php'); //redirect to main
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

?>

<form method="post">
  <h1>Login:<br><input name="login"><br>
  Password:<br><input name="password"><br>
  <input type="submit"></h1>
</form>
