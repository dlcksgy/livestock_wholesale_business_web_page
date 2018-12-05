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
  $conn = mysqli_connect("localhost", "root", "dlcksgy78@", "test");
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
        <li class="nav-item">
          <a class="nav-link" href="login_popup.php">로그인</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new_accounts.php">회원가입</a>
        </li>

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










  <!-- Page Content -->

  <div class="row bg-dark">
    <div class="col-lg-1 mb-1">
      asd
    </div>
  </div>

  <br><br><br>

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
          <form class="needs-validation" method="POST" action="/new_accounts.php">
            <div class="mb-3">
              <label for="usernames">아이디</label>
              <div class="row">
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="id_input" name="id"  placeholder="아이디" required/>
                </div>
                <div class="col-lg-2">
                  <button class="btn btn-info btn-block" type="button"onclick="checking_id()">중복검사</button>
                </div>
              </div>
              <span id="val_id" ></span>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3" id="please">
                <label for="firstName">비밀번호</label>
                <input type="password" class="form-control" id="pw_input" name="pw" placeholder="영문, 숫자, 특수문자 조합 8자 이상 " required>
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
        <button class="btn btn-info btn-block my-4" type="submit">회원가입</button>
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


    document.getElementById('id_input').onkeyup = function() {
      var msg = '',
      val = this.value;
      if( val.length > 5 ){
        msg = 'good';
      }else{
        msg = '아이디를 5글자 보다 길게 만드세요'
        flag1 = 0;
      };
      document.getElementById('val_id').textContent = msg;
    };
    document.getElementById('pw_input').onkeyup = function() {
      var msg = '',
      val = this.value;
      if( val.length > 8 ){
        msg = "good";
      }else{
        msg = '비밀번호를 8글자보다 길게 만드세요';
      };
      document.getElementById('val_pw').textContent = msg;
    };
    document.getElementById('pw2_input').onkeyup = function() {
      var temp = document.getElementById('pw_input').value;
      if( temp == this.value ){
        msg = '패스워드가 일치합니다';
      }else{
        msg = '패스워드가 일치하지 않습니다.';
      };
      document.getElementById('val_pw2').textContent = msg;
    };


  </script>












  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
