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

  <title>(주)미트빌</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="new_account.css" rel="stylesheet">

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
              <a class="dropdown-item" href="infocompany.php">오시는 길</a>
            </div>

          </li>
        </ul>
      </div>
    </div>
  </nav>











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
      <a href="" class="list-group-item list-group-item-action active bg-dark">오시는길</a>
      <a href="login_popup.php" class="list-group-item list-group-item-action ">
        로그인
      </a>
      <a href="new_accounts.php" class="list-group-item list-group-item-action">회원가입</a>
      <!-- <a href="#!" class="list-group-item list-group-item-action">아이디 비밀번호 찾기</a> -->
      <a href="faq.php" class="list-group-item list-group-item-action">자주 묻는 질문</a>
      <a href="one-to-one.php" class="list-group-item list-group-item-action">1대1 질문</a>
    </div>
  </div>
  <!-- Content Column -->

  <div class="col-lg-8 mb-4">



  </br>
  </br>
  <!-- Content Row -->
  <p class="h4 mb-4" >오시는 길</p>
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
        연락처 : (010)-9956-1924
      </p>
      <p>
        주소 :
      </p>
      <p>
        영업일 : 월요일 - 금요일 </P> 영업시간 : 09:00 AM 부터 05:00 PM 까지
      </p>
    </div>
  </div>









</div>
</div>










<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; (주)오트밀</p>
  </div>
  <!-- /.container -->
</footer>
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c1bfb1a82491369ba9efbac/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>


</body>





<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
