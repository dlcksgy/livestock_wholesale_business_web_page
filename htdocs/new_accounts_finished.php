<?php

session_start();
$errors = array();

if(isset($_POST['login'])){
  $username = $_POST['login'];
  $password_temp = $_POST['password'];
  $password = md5($password_temp);

  $conn = mysqli_connect("localhost", "root", "123456", "test");

  $result =
  mysqli_query($conn,
  "SELECT * FROM `person` WHERE a = '".$username."' AND b = '".$password."'");


  if(mysqli_num_rows($result) == 1){
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "you are now logged in";
    header('location: index.php');
  }else{
    array_push($errors,"아이디 혹은 패스워드가 틀렸습니다. 다시 입력해 주세요");
  }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>축산물 도소매</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">축산도소매 홈페이지</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline my-4 my-lg-0">
      <input class="form-control mr-sm-2 " type="text" size = 40 placeholder="상품명">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">검색</button>
    </form>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="login_popup.php">로그인</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new_accounts.php">회원가입</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            고객센터
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="faq.php">자주묻는 질문</a>
            <a class="dropdown-item" href="one-to-one.php">1대1 질문</a>
            <a class="dropdown-item" href="admin_index.php">관리자</a>
          </div>
        </li>
      </ul>
    </div>

  </nav>

  <!-- Page Content -->

  <div class="row bg-dark">
    <div class="col-lg-1 mb-1">
      asd
    </div>
  </div>

  <br><br><br>


</div>
<div class="row">
  <div class="col-lg-1 mb-1">
  </div>


  <div class="col-lg-2 mb-4">
    <p></p>
    <p></p>
    <div class="list-group">
      <a class="list-group-item list-group-item-action disabled">고객센터</a>
      <a href="" class="list-group-item list-group-item-action active bg-dark">
        로그인
      </a>
      <a href="new_accounts.php" class="list-group-item list-group-item-action ">회원가입</a>
      <!-- <a href="#!" class="list-group-item list-group-item-action">아이디 비밀번호 찾기</a> -->
      <a href="faq.php" class="list-group-item list-group-item-action">자주 묻는 질문</a>
      <a href="one-to-one.php" class="list-group-item list-group-item-action">1대1 질문</a>
    </div>
  </div>
  <!-- Content Column -->
  <div class="col-lg-1 mb-1">
  </div>
  <div class="col-lg-5 mb-4">
    <!-- Default form login -->
    <form class="text-center border border-light p-5" method="post">

      <p class="h4 mb-4" >회원가입을 축하드립니다! 로그인하여 주세요</p>
      <?php
      if(count($errors)>0) :?>
        <div class="error">
          <?php foreach ($errors as $error):?>
            <p><?php echo $error; ?></p>
          <?php endforeach ?>
        </div>
      <?php endif ?>
      <!-- Email -->
      <input type="text" id="defaultLoginFormId" class="form-control mb-4" placeholder="E-mail" name="login" required>

      <!-- Password -->
      <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password" required>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">기억하기</label>
          </div>
        </div>

      </div>

      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4" type="submit">로그인</button>

      <!-- Register -->
      


    </form>
    <!-- Default form login -->
  </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
  </div>
  <!-- /.container -->
</footer>

</body>

<!-- /.container -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
