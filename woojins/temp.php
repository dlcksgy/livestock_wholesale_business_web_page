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
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: white;border-bottom:3.5px solid rgb(153,43,36)">
        <div class="container">
            <a class="navbar-brand" href="index.php" padding="0"><img class="title"src="./title.png" height="40em"></a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                            <div class="menu collapse navbar-collapse">
                                <h3>
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #2E2E2E; font-size: 15pt; margin-top:0.3em;">
                                                한우
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                              <form class="submit" method="post" action="sale_page.php">
                                                <input type="submit" name="submit" value="안심 한우 거세" width = 100% >
                                                <input type="submit" name="submit" value="안심 한우 암소" width = 100% >
                                                <input type="submit" name="submit" value="일반 한우 거세" width = 100% >
                                                <input type="submit" name="submit" value="일반 한우 암소" width = 100% >
                                              </form>

                                                <!--a class="dropdown-item" href="sale_page.php">안심 한우 거세</a>
                                                <a class="dropdown-item" href="sale_page.php">안심 한우 암소</a>
                                                <a class="dropdown-item" href="sale_page.php">일반 한우 거세</a>
                                                <a class="dropdown-item" href="sale_page.php">일반 한우 암소</a-->
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #2E2E2E; font-size: 15pt; margin-top:0.3em;">
                                                육우
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                              <form class="submit" method="post" action="sale_page.php">
                                                <input type="submit" name="submit" value="육우 거세" width = 100% >
                                              </form>
                                                <!--a class="dropdown-item" href="sale_page.php">육우 거세</a-->
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #2E2E2E; font-size: 15pt; margin-top:0.3em;">
                                                한돈
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                              <form class="submit" method="post" action="sale_page.php">
                                                <input type="submit" name="submit" value="안심 한돈(암퇘지)" width = 100% >
                                                <input type="submit" name="submit" value="일반 한돈" width = 100% >
                                              </form>

                                                <!--a class="dropdown-item" href="sale_page.php">안심 한톤(암퇘지)</a>
                                                <a class="dropdown-item" href="sale_page.php">일반 한돈</a-->

                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #2E2E2E; font-size: 15pt; margin-top:0.3em;">
                                                기타
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                              <form class="submit" method="post" action="sale_page.php">
                                                <input type="submit" name="submit" value="기타 한우" width = 100% >
                                                <input type="submit" name="submit" value="가공 상품" width = 100% >
                                                <input type="submit" name="submit" value="가금류" width = 100% >
                                              </form>
                                            </div>
                                        </li>
                                    </ul>
                                </h3>
                            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login_popup.php"  style="color: #2E2E2E">로그인</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new_accounts.php"style="color: #2E2E2E">회원가입</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a style="color: #2E2E2E" class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            고객센터
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="full-width.php">Full Width Page</a>
                            <a class="dropdown-item" href="sidebar.php">Sidebar Page</a>
                            <a class="dropdown-item" href="faq.php">FAQ</a>
                            <a class="dropdown-item" href="404.php">404</a>
                            <a class="dropdown-item" href="pricing.php">Pricing Table</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->



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
