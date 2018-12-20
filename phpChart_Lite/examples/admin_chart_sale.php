<?php
  session_start();
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['success']);
    echo "<script>alert('로그아웃에 성공하였습니다!');</script>";

  }

//그래프용
  require_once("../conf.php");
  $l1 = array(2, 3, 1, 4, 3);
  $l2 = array(1, 4, 3, 2, 5);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css" media="screen">
    .jqplot-axis {
      font-size: 0.85em;
    }
    .jqplot-title {
      font-size: 1.1em;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.html">(주)미트빌 Dashboard</a>
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
        <?php  endif?>
      </ul>
    </div>

  </nav>




  <header>


  </header>







  <!-- Page Content -->

<div class="row bg-dark">
  <div class="col-lg-1 mb-1">
  </div>
</div>

<br><br>


</div>
    <div class="row">
      <!-- <div class="col-lg-1 mb-1">
      </div> -->


      <div class="col-lg-2 mb-4">
        <p></p>
        <p></p>
        <div class="list-group">
          <a href="./admin_chart_page.php" class="list-group-item list-group-item-action"><strong>사이트 관리</strong></a>
          
          <a class="collapsed list-group-item list-group-item-action disabled active list-group-item-dark" data-toggle="collapse" href="#collapseTwo">상품 관리</a>

          <a href="./admin_chart_users.php" class="list-group-item list-group-item-action">회원 관리</a>
          <a href="#" class="list-group-item list-group-item-action">고객 분석</a>

          <a class="collapsed list-group-item list-group-item-action" data-toggle="collapse" href="#collapseThree">주문 관리</a>
          <a href="#" class="list-group-item list-group-item-action">게시판 관리</a>

        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-1 mb-1">
      </div>
      <div class="col-lg-7 mb-4">
      <?php
      //그래프그리는 코드
          
    $pc = new C_PhpChartX(array($l2),'chart2');
 
    $pc->set_title(array('text'=>'일별 판매량'));
	$pc->set_animate(true);
    $pc->set_series_default(array('fill'=>true));
    $pc->set_axes(array('xaxis'=>array('pad'=>1.0)));
    
    $pc->draw(600, 400);

/*
      ?>
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

<!-- <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="login_popup.css" media="all" rel="Stylesheet" type="text/css" />
    <title></title>
  </head>
  <body>




  </script>
  </html> -->
