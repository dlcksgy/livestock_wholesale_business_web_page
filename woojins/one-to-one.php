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
        $conn = mysqli_connect("localhost", "root", "123456", "test");

        $resource = mysqli_query( $conn," SELECT * FROM gasipan" );
        $total_len = mysqli_num_rows( $resource );

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
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">이전</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">다음</a>
            </li>
          </ul>
        </nav>



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
