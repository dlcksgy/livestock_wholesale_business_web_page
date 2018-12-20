<?php
  session_start();
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['success']);
    echo "<script>alert('로그아웃에 성공하였습니다!');</script>";

  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.html">축산도소매 홈페이지</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline my-4 my-lg-0">
      <input class="form-control mr-sm-2 " type="text" size = 40 placeholder="상품명">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">검색</button>
    </form>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['success'])): ?>
          <li class="nav-item">
            <a class="nav-link">
              <?php echo $_SESSION['username'].$_SESSION['success'] ?>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?logout='1'">로그아웃</a>
          </li>
        <?php  endif?>
        <?php if(!isset($_SESSION['success'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="login_popup.php">로그인</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new_accounts.php">회원가입</a>
          </li>
        <?php  endif?>
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




  <header>


  </header>







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
      <a href="login_popup.php" class="list-group-item list-group-item-action ">
        로그인
      </a>
      <a href="new_accounts.php" class="list-group-item list-group-item-action">회원가입</a>
      <!-- <a href="#!" class="list-group-item list-group-item-action">아이디 비밀번호 찾기</a> -->
      <a href="faq.php" class="list-group-item list-group-item-action">자주 묻는 질문</a>
      <a href="one-to-one.php" class="list-group-item list-group-item-action active bg-dark">1대1 질문</a>
    </div>
  </div>
  <!-- Content Column -->

  <div class="col-lg-8 mb-4">



  </br>

  <!-- Content Row -->
  <div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
      <!-- Embedded Google Map -->
      <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=kr&amp;ie=UTF8&amp;ll=37.600598,126.864420&amp;spn=56.506174,79.013672&amp;t=m&amp;z=15&amp;output=embed"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
      <h3>주소</h3>
      <p>
        경기도 고양시 화전동
        <br>한국항공대학교
        <br>
      </p>
      <p>
        <abbr title="Phone">P</abbr>: (010)-1234-5678
      </p>
      <p>
        <abbr title="Email">E</abbr>:
        <a href="mailto:rlatjdtn1014@naver.com"><rlatjdtn1014@naver class="com"></rlatjdtn1014@naver>
        </a>
      </p>
      <p>
        <abbr title="Hours">H</abbr>: 월요일 - 금요일 </P> 09:00 AM 부터 05:00 PM 까지
      </p>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-10 mb-4">
      <h3>1대1 문의하기</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="control-group form-group">
          <div class="controls">
            <label>이름</label>
            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>핸드폰번호</label>
            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>답변 받으실 이메일 주소</label>
            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>내용</label>
            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-info btn-block my-4" id="sendMessageButton">문의하기</button>
      </form>
    </div>

  </div>






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
