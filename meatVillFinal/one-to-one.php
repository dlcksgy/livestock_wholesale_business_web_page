<?php
session_start();
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['success']);
  echo "<script>alert('로그아웃에 성공하였습니다!');</script>";

}
if(isset($_GET['delete'])){
  echo "<script>alert('성공적으로 삭제하였습니다.');</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>(주)미트밀</title>

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
<!-- Navigation -->




<header>


</header>





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
      <a href="infocompany.php" class="list-group-item list-group-item-action">오시는길</a>

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
    <table class = "table table-hover">
      <thread>
        <tr>
          <th>번호</th>
          <th>제목</th>
          <th>작성자</th>
          <th>날짜</th>
          <th>조회수</th>
        </tr>
      </thread>
      <tbody>
        <?php
        $conn = mysqli_connect("172.31.16.108", "root", "dlcksgy78@", "test");
    $resource = mysqli_query( $conn," SELECT * FROM gasipan" );
        $total_len = mysqli_num_rows( $resource );
        if(isset($_GET['idx'])){
            $start = (int)($_GET['idx']*10-10);
            $sql = "SELECT * FROM gasipan LIMIT $start, 10";
        }else{
          $sql = "SELECT * FROM gasipan LIMIT 10";
        }
        $resource = mysqli_query( $conn,$sql );

        $num = 1;
        while($row=mysqli_fetch_array($resource,MYSQLI_ASSOC) ) {
          print "<tr>";
            print "<th scope='row'>$num</th>";
            print "<td><a href= \"./contentspage.php?a=$row[a]\" style=\"text-decoration: none\">$row[a]</a></td>";
            print "<td>$row[c]</td>";
            print "<td>$row[f]</td>";
            print "<td>$row[e]</td>";
            print "</tr>";
            $num++;
          }

          ?>
        </tbody>
      </table>
      <hr/>
      <a href ="writetext.php"><button class="btn btn-outline-dark">글쓰기</button><a href ="./writetext.php">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">

            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=1">1</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=2">2</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=3">3</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=4">4</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=5">5</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=6">6</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=7">7</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=8">8</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=9">9</a></li>
            <li class="page-item"><a class="page-link" href="./one-to-one.php?idx=10">10</a></li>

          </ul>
        </nav>



      </br>

      <!-- Content Row -->
      <!-- Map Column -->

      <!--Start of Tawk.to Script-->
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
      <!--End of Tawk.to Script-->

    </div>
    <!-- Contact Details Column -->

  </div>








</div>
</div>










<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; 미트빌 2018</p>
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
