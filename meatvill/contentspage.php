<?php
session_start();
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['success']);
  echo "<script>alert('로그아웃에 성공하였습니다!');</script>";

}
if(isset($_GET['delete'])){
  $conn = mysqli_connect("172.31.16.108", "root", "dlcksgy78@", "test");
  $a = $_GET['delete'];
  mysqli_query($conn,
  "DELETE FROM `gasipan` WHERE a = '".$a."'");
  header('location: ./one-to-one.php?delete=y');

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

  <link rel="stylesheet"  href ="css/bootstrap.css">

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

  <div class="col-lg-7 mb-4">
    <!-- Embedded Google Map -->
    <div class="card" >
      <div class="card-body">
        <?php
        $conn = new mysqli("172.31.16.108", "root", "dlcksgy78@", "test");







        print "<h4 class=\"card-title\">";
          if(isset($_GET['a'])){

            $a = $_GET['a'];
            $result =
            mysqli_query($conn,
            "SELECT * FROM `gasipan` WHERE a = '".$a."'");
            $count_tmp= 0;

            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC) ) {
              print "  <p class=\"card-text\">$row[a]</p></h4>";
              print "  <p class=\"card-text float-lg-right\">작성일  [ $row[f] ]</p>";
              print "  <p class=\"card-text \">작성자  [ $row[c] ]</p>";
              print "<hr/><br><br><br> ";
              print "<p class=\"card-text\">$row[d]</p><br>";
              $title_tmp=$row["a"];

              $count_tmp =$row["e"]+1;
              print "<p class=\"card-text float-lg-right\">조회수 $count_tmp</p><br>";


            }
            mysqli_query($conn,
            "UPDATE `gasipan` SET `e`='".$count_tmp."' WHERE `a`='".$title_tmp."'");
          }
          ?>


          <hr/>

          <a href="" class="btn btn-outline-dark">답글달기</a>
          <a href="./contentspage.php?delete=<?php echo $a ?>" class="btn btn-outline-dark float-lg-right">삭제하기</a>

          <div id="disqus_thread"></div>
          <script>

            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://miteumil.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

      </div>
    </div>


    <hr/>




  </br>

  <!-- Content Row -->
  <!-- Map Column -->



</div>
<!-- Contact Details Column -->

</div>








</div>
</div>










<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; (주)오트밀 2018</p>
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
