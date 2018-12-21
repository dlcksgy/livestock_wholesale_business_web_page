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
<?php

$selected = $_REQUEST['submit'];
if($selected == "안심 한우 거세"){
  $title = '한우';
}
else if($selected == "안심 한우 암소"){
  $title = '한우';
}
else if($selected == "일반 한우 거세"){
  $title = '한우';
}
else if($selected == "일반 한우 암소"){
  $title = '한우';
}
else if($selected == "육우 거세"){
  $title = '육우';
}
else if($selected == "안심 한돈(암퇘지)"){
  $title = '한돈';
}
else if($selected == "일반 한돈"){
  $title = '한돈';
}
else if($selected == "기타 한우"){
  $title = '기타';
}
else if($selected == "가공 상품"){
  $title = '기타';
}
else if($selected == "가금류"){
  $title = '기타';
}
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>(주)미트빌</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="sale_page.css?ver=9" rel="stylesheet">

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

  <div id="empty"></div>
  <table id="layout">
    <td  id="index_section">
      <div>
        <table id = "index_table" width = 100%>
          <tr><th id = "idex"><h3><?php echo $title ?></h3></th></tr>
          <tr><th>
            <div id = "index_contents">
            <?php if($title == "한우") {?>
              <form class="submit" method="post" action="sale_page.php">
                <input type="submit" name="submit" value="안심 한우 거세" width = 100% >
                <input type="submit" name="submit" value="안심 한우 암소" width = 100% >
                <input type="submit" name="submit" value="일반 한우 거세" width = 100% >
                <input type="submit" name="submit" value="일반 한우 암소" width = 100% >
              </form>
            <?php } else if($title == "육우") {?>
              <form class="submit" method="post" action="sale_page.php">
                <input type="submit" name="submit" value="육우 거세" width = 100% >
              </form>
            <?php } else if($title == "한돈") {?>
              <form class="submit" method="post" action="sale_page.php">
                <input type="submit" name="submit" value="안심 한돈(암퇘지)" width = 100% >
                <input type="submit" name="submit" value="일반 한돈" width = 100% >
              </form>
            <?php } else if($title == "기타") {?>
              <form class="submit" method="post" action="sale_page.php">
                <input type="submit" name="submit" value="기타 한우" width = 100% >
                <input type="submit" name="submit" value="가공 상품" width = 100% >
                <input type="submit" name="submit" value="가금류" width = 100% >
              </form>
            <?php } ?>
            </div>
          </th></tr>
        </table>
      </div>
    </td>
    <td id="board">
      <div>
        <h3 id="title"><?php echo $selected ?></h3>
        <div id="sort">
          <button>sort</button>
          <button>listview</button>
          <button>gridview</button>
        </div>
        <div id="contents">
          <?php
          $listarr = []; //img
          $lists = glob("./img/".$title."/".$selected."/*.jpg", GLOB_BRACE);
          $num=0;

          foreach($lists as $list){
            $arr = []; //img
            $name = basename($list,'.jpg');
            $text = fopen("./img/".$title."/".$selected."/".$name."/".$name.".txt", "r");
            while(!feof($text)) { //문자의 마지막 행까지 간다
              $str = fgets($text,100); // 10000길이까지 읽어드리지만 중간에 개행문자가 있으면 알아서 멈춘다.
              if($str!=null){

                $arr[] = $str; // $arr배열에 하나씩 넣는다. $b[1] = "첫번째 줄" 뭐 이런식
              }
            }
            fclose($text);

            if($arr[11]!=null){
              $listarr[] =  '<form name="search-form'.$num.'" action="info_page.php">
              <input type="hidden" name="info" value="' . basename($list,'.jpg') . '"/>
              <input type="hidden" name="title" value="'.$title.'"/>
              <input type="hidden" name="subtitle" value="'.$selected.'"/>
              <div id = ' . basename($list,'.jpg') . ' onClick="document.forms[\'search-form'.$num.'\'].submit();">
              <div id = "information"><img src="'.$list.'">
              <div class="div_title">'.basename($list,'.jpg').'</div><br>
              <div id="figure"><span>'.$arr[11].'<span></div>
              <div id="production_date">가공일 : 2018-10-19</div>
              <div id="distribution_period">유통기한 : 2018-10-19 ~2018-12-19</div></div>
              <div id="price">kg당<span>'.$arr[1].'</span>원</div></div></form>' ;
              $num+=1;
            }else{
              $listarr[] =  '<form name="search-form'.$num.'" action="info_page.php">
              <input type="hidden" name="info" value="' . basename($list,'.jpg') . '"/>
              <input type="hidden" name="title" value="'.$title.'"/>
              <input type="hidden" name="subtitle" value="'.$selected.'"/>
              <div id = ' . basename($list,'.jpg') . ' onClick="document.forms[\'search-form'.$num.'\'].submit();">
              <div id = "information"><img src="'.$list.'">
              <div class="div_title">'.basename($list,'.jpg').'</div>
              <br>
              <div id="production_date">가공일 : 2018-12-21</div>
              <div id="distribution_period">유통기한 : 2018-12-21 ~2018-01-02</div></div>
              <div id="price">kg당<span>'.$arr[1].'</span>원</div></div></form>' ;
              $num+=1;
            }
          }
          foreach ($listarr as $var){//txt출력
            echo $var;
          }
          ?>
        </div>
        <div id="pageBtn">
          <button>1</button>
        </div>
      </div>
    </td>
  </table>

<!-- /.container -->

<!-- Footer -->

<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; 미트빌 2018</p>
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

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
