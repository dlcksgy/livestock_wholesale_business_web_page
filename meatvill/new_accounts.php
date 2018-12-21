<?php

session_start();
$errors = array();
 if(isset($_SESSION['success'])){
   header("Location: /index.php?already='1'"); //redirect to main
 }
$errors = array();
//array_push($errors,"")
if(isset($_POST['id'])){
  $id=$_POST['id'];
  $pw_temp=$_POST['pw'];
  $pw = md5($pw_temp);
  $username=$_POST['username'];
  $jumin=$_POST['jumin1'].$_POST['jumin2'];
  $address=$_POST['address'];
  $phone=$_POST['phone1'].$_POST['phone2'].$_POST['phone3'];
  $conn = mysqli_connect("172.31.16.108", "root", "dlcksgy78@", "test");
  //아이디 중복
  $result =
  mysqli_query($conn,
  "SELECT * FROM `person` WHERE a = '".$id."' "
  );
  if(mysqli_num_rows($result) != 0){
    array_push($errors,"아이디가 이미 존재합니다.");
  }
  //주민번호 중복 검사
  $result =
  mysqli_query($conn,
  "SELECT * FROM `person` WHERE d = '".$jumin."' "
  );
  if(mysqli_num_rows($result) != 0){
    array_push($errors,"이미 회원가입을 하셨습니다.");
  }
  //입럭
  if(count($errors) == 0){
    mysqli_query($conn,
    "INSERT INTO `person` (`a`, `b`, `c`, `d`, `e`, `f`, `g`)
    VALUES ('".$id."', '".$pw."', '".$username."', '".$jumin."', '".$address."', '".$phone."', '1')
    ");
    header('location: new_accounts_finished.php');

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

  <title>축산물 도소매 홈페이지</title>

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





  <br><br><br>

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
        <a href="new_accounts.php" class="list-group-item list-group-item-action active bg-dark">회원가입</a>
        <!-- <a href="#!" class="list-group-item list-group-item-action">아이디 비밀번호 찾기</a> -->
        <a href="faq.php" class="list-group-item list-group-item-action">자주 묻는 질문</a>
        <a href="one-to-one.php" class="list-group-item list-group-item-action">1대1 질문</a>
      </div>
    </div>
    <!-- Content Column -->
    <div class="col-lg-1 mb-1">
    </div>
    <div class="col-lg-5 mb-4">
      <div class="py-5 text-center">
        <p class ="h4 mb-4"> 회원가입</p>
        <?php
        if(count($errors)>0) :?>
          <div class="error">
            <?php foreach ($errors as $error):?>
              <p><?php echo $error; ?></p>
            <?php endforeach ?>
          </div>
        <?php endif ?>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" method="POST" action="/new_accounts.php" onsubmit="return validateForm()">
            <div class="mb-3">
              <label for="usernames">아이디</label>
              <div class="row">
                <div class="col-lg-12">
                  <input type="text" class="form-control" id="id_input" name="id"  placeholder="아이디" required/>
                </div>
              </div>
              <span id="val_id" ></span>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3" id="please">
                <label for="firstName">비밀번호</label>
                <input type="password" class="form-control" id="pw_input" name="pw" placeholder="6~20자리, 최소 1개이상 " required>
                <span id="val_pw" ></span>

              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">비밀번호 확인</label>
                <input type="password" class="form-control" id="pw2_input"  placeholder="한번 더 입력" required>
                <span id="val_pw2" ></span>

              </div>
            </div>
            <div class="mb-3">
              <label for="name">이름</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="username" placeholder="홍길동" required>
                <div class="invalid-feedback" style="width: 100%;">
                  이름을 입력하세요.
                </div>
              </div>

            </div>
            <div class="mb-3">

              <label>주민번호</label>
              <div class="row">
                <div class="col-md-3 col-lg-6">
                  <input type="number" class="form-control" id="jumin_first" name="jumin1" placeholder="900101" required>
                </div>


                <div class="col-md-3 col-lg-6">
                  <input type="number" class="form-control" id="jumin_second"name="jumin2" placeholder="1234567" required>
                </div>
              </div>
            </div>

            <div class="mb-3 ">
              <label for="address">주소</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="서울특별시 강남구 역삼동..." required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>


            <label>전화번호</label>
            <div class="row">
              <div class="col-md-2 mb-3">
                <select class="custom-select d-block w-100" name="phone1" id="phone1" required>
                  <option value="">선택</option>
                  <option>010</option>
                  <option>011</option>
                  <option>012</option>
                  <option>013</option>
                  <option>014</option>
                  <option>015</option>
                  <option>016</option>
                  <option>017</option>
                  <option>018</option>
                  <option>019</option>
                </select>
                <div class="invalid-feedback">
                  적절한 번호를 선택해 주세요
                </div>
              </div>
              <div class="col-md-3">
                <input type="number" size ="4" class="form-control" id="phone2" name="phone2" placeholder="1234" required>

                <div class="invalid-feedback">
                  핸드폰 번호를 입력하여 주세요
                </div>
              </div>
              <div class="col-md-3">
                <input type="number" size="4" class="form-control" id="phone3" name="phone3" placeholder="5678" required>

                <div class="invalid-feedback">
                  핸드폰 번호를 입력하여 주세요
                </div>
              </div>
            </div>

            <br>





          </div>
          <hr class="mb-4">
        </div>

        <div class="d-block my-3">
        </div>
        <hr class="mb-4">
        <button class="btn btn-info btn-block my-4" type="submit">회원ㅁ가입</button>
      </form>
    </div>

  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
  </footer>


  <script type="text/javascript">
  var flag1 = 0;
  var flag2 = 0;
  var flag3 = 0;


    document.getElementById('id_input').onkeyup = function() {
      var msg = '',
      val = this.value;
      if(!/^[a-zA-Z0-9]{10,15}$/.test(this.value)){
        msg = '숫자와 영문자 조합으로 10~15자리를 사용해야 합니다.'
        flag1 = 0;
      }
      else{
        msg = 'good';
        flag1 = 1;
      };
      document.getElementById('val_id').textContent = msg;
    };
    document.getElementById('pw_input').onkeyup = function() {
      var msg = '',
      val = this.value;
      if( /^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{6,20}$/.test(this.value) ){
        msg = "good";
        flag2 = 1;
      }else{
        msg = '6~20자리, 최소 1개이상의 특수문자 조건을 만족하세요';
        flag2 = 0;
      };
      document.getElementById('val_pw').textContent = msg;
    };
    document.getElementById('pw2_input').onkeyup = function() {
      var temp = document.getElementById('pw_input').value;
      if( temp == this.value ){
        msg = '패스워드가 일치합니다';
        flag3 = 1;
        alert (flag3);

      }else{
        msg = '패스워드가 일치하지 않습니다.';
        flag3= 0;
      };
      document.getElementById('val_pw2').textContent = msg;
    };
    function validateForm() {
      if(flag1 ==1 &&flag2 == 1 && flag3 == 1){
        return true;


      }
      alert ("주어진 조건에 맞게 다시입력하세요");
      return false;


    }

  </script>












  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
