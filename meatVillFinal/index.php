<?php
session_start();
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['success']);
  echo "<script>alert('로그아웃에 성공하였습니다!');</script>";
}
if(isset($_GET['already'])){
  echo "<script>alert('이미 로그인중입니다! 메인으로 돌아갑니다.');</script>";

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
  <link href="index.css?ver=3" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css?ver=1" rel="stylesheet">

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
  <!-- Navigation -->


  <header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./images/1.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/2.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/3.jpg')">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </header>

  <!-- //메뉴 -->
  <!-- Page Content -->
  <div class="container">


    <h3 class="my-4">추천 상품</h3>


    <div class="row">

      <?php
      $listarr = []; //img
      $lists = glob("./img/한우/안심 한우 암소/*.jpg", GLOB_BRACE);
      $num=0;

      foreach($lists as $list){
        $arr = []; //img
        $name = basename($list,'.jpg');
        $text = fopen("./img/한우/안심 한우 암소/".$name."/".$name.".txt", "r");
        while(!feof($text)) { //문자의 마지막 행까지 간다
          $str = fgets($text,100); // 10000길이까지 읽어드리지만 중간에 개행문자가 있으면 알아서 멈춘다.
          if($str!=null){

            $arr[] = $str; // $arr배열에 하나씩 넣는다. $b[1] = "첫번째 줄" 뭐 이런식
          }
        }
        fclose($text);

        if($arr[11]!=null){
          $listarr[] ='
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <form name="search-form'.$num.'" action="info_page.php">
                <input type="hidden" name="info" value="'.$name.'"/>
                <input type="hidden" name="title" value="한우"/>
                <input type="hidden" name="subtitle" value="안심 한우 암소"/>
                <div id = ' .$name. ' onClick="document.forms[\'search-form'.$num.'\'].submit();">
                  <img class="card-img-top" src="./img/한우/안심 한우 암소/'.$name.'.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">'.$name .'</a>
                    </h4>
                    <p class="card-text">
                      <div id="figure"><span>'.$arr[11].'<span></div>
                        가공일 : 2018-12-21<br>
                        유통기한 : 2018-12-21 ~2018-01-02<br>
                        <div id="price">kg당<span>'.$arr[1].'</span>원</div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>';
              $num+=1;
            }else{
              $listarr[] ='
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <form name="search-form'.$num.'" action="info_page.php">
                    <input type="hidden" name="info" value="'.$name.'"/>
                    <input type="hidden" name="title" value="한우"/>
                    <input type="hidden" name="subtitle" value="안심 한우 암소"/>
                    <div id = ' .$name. ' onClick="document.forms[\'search-form'.$num.'\'].submit();">
                      <img class="card-img-top" src="./img/한우/안심 한우 암소/'.$name.'.jpg" alt="">
                    </form>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">'.$name .'</a>
                      </h4>
                      <p class="card-text">
                        가공일 : 2018-12-21<br>
                        유통기한 : 2018-12-21 ~2018-01-02<br>
                        <div id="price">kg당<span>'.$arr[1].'</span>원</div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>';
              $num+=1;
            }
          }
          foreach ($listarr as $var){//txt출력
            echo $var;
          }
          foreach ($listarr as $var){//txt출력
            echo $var;
          }
          foreach ($listarr as $var){//txt출력
            echo $var;
          }
          ?>


        </div>
        <!-- /.row -->
      </div>


      <!-- /.container -->

      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; 미트빌 2018</p>
        </div>
        <!-- /.container -->
      </footer>


      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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

    </html>
