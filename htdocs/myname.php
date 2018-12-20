<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131200553-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131200553-1');
</script>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="myname.css" title="style" />

  <title></title>
</head>
<body>
  <div id = "container">

    <div id = "header">
      <h1> 개인 홈페이지</h1>
      대학생활편-학부-
      <img src="img/kau.png" alt="cant">
    </div>
    <div id="left">
      <form  enctype="multipart/form-data" action="myname.php" method="post">
        <p>
          <button class="button" style="vertical-align:middle" name="A"><span>학부 정리 </span></button>
        </p>
        <p>
          <button class="button" style="vertical-align:middle"name = "B"><span>자기 소개서 </span></button>
        </p>
        <p>
          <button class="button" style="vertical-align:middle"name = "C"><span>이력서 </span></button>
        </p>
        <video width="160" height="120" controls>
          <source src="현아.mp4" type="video/mp4">
            </video>

      </div>

    </form>
    <div id = "right">
      <?php
      //A 부분 정리 ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
      if(isset($_POST['A'])){
        ?>
        <div class="entry">
          <form enctype="multipart/form-data" action="myname.php" method="post">

            <h2><span class ="date">1학년 1학기</span>:신입생
            <button class="button2" style="vertical-align:middle"name="1"><span>조회하기 </span></button></h2>

            <p class="clearer"></p>
          </div>
          <div class="entry">
            <h2><span class ="date">1학년 2학기</span>:신입생인줄 착각할 때
            <button class="button2" style="vertical-align:middle"name="2"><span>조회하기 </span></button></h2>
            <p class="clearer"></p>
          </div>
          <div class="entry">
            <h2><span class ="date">2학년 1학기</span>:신입생 아닐떄
            <button class="button2" style="vertical-align:middle"name="3"><span>조회하기 </span></button></h2>
            <p class="clearer"></p>
          </div>
          <div class="entry">
            <h2><span class ="date">2학년 2학기</span>:유통기간 끝나갈 때
            <button class="button2" style="vertical-align:middle"name="4"><span>조회하기 </span></button></h2>
            <p class="clearer"></p>
          </div>
          <div class="entry">
            <h2><span class ="date">3학년 1학기</span>:화석시작
            <button class="button2" style="vertical-align:middle"name="5"><span>조회하기 </span></button></h2>
            <p class="clearer"></p>
          </div>
          <div class="entry">
            <h2><span class ="date">군 대 </span>: ........
            <button class="button2" style="vertical-align:middle"name="6"><span>조회하기 </span></button></h2>
            <p class="clearer"></p>
          </div>

        </form>
      <?php }

      //ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡAㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
      ?>

      <?php
      //B 부분 정리 ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
      if(isset($_POST['B'])){
        ?>

        <div class="entry">
          <h2>개인정보가 있는 페이지 입니다. 이름과 주민번호를 입력해 주세요</h2>

          <form action="myname.php">
            이름:<br>
            <input type="text" name="name1" >
            <br>
            주민번호:<br>
            <input type="text" name="number" >
            <br><br>
            <input type="submit" value="로그인">
          </form>
        </div>


      <?php }

      if(isset($_REQUEST['name'])){
        if($_REQUEST['name'] == "김성수"&&$_REQUEST['number'] == "123"){
          ?>
            <img src="img/b.png" alt="uploadfail"/>
            <a href=/자기소개서.hwp>이력서.hwp 다운로드</a>

        <?php
      }

        ?>
      <?php }
      //ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡBㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
      ?>
      <?php
      //c 부분 정리 ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
      if(isset($_POST['C'])){
        ?>

        <div class="entry">
          <h2>개인정보가 있는 페이지 입니다. 이름과 주민번호를 입력해 주세요</h2>

          <form action="myname.php">
            이름:<br>
            <input type="text" name="name" >
            <br>
            주민번호:<br>
            <input type="text" name="number" >
            <br><br>
            <input type="submit" value="로그인">
          </form>
        </div>


      <?php }

      if(isset($_REQUEST['name'])){
        if($_REQUEST['name'] == "김성수"&&$_REQUEST['number'] == "123"){
          ?>
          <img src="img/a.png" alt="img/b.png">
          <a href=/이력서.hwp>이력서.hwp 다운로드</a>
        </form>


          <?php
        }

        ?>
      <?php }
      //ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡcㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
      ?>
      <?php
      if(isset($_POST['1'])){
        ?>

        <img src="img/1.png" alt="notfound"/>
        <form  action="myname.php" >

      <?php
        foreach (glob("scores/1-1/*") as $textname) {
          ?>
          <button class="buttons" style="vertical-align:middle" name = "classes" value="<?= $textname;  ?>"><span><?=  basename($textname);  ?> </span></button>

          <?php
        } ?>
      <?php } ?>
       </form>
      <?php
      if(isset($_POST['2'])){
        ?>

        <img src="img/2.png" alt="notfound"/><br>
        <form  action="myname.php" >

      <?php
        foreach (glob("scores/1-2/*") as $textname) {
          ?>
          <button class="buttons" style="vertical-align:middle" name = "classes" value="<?= $textname;  ?>"><span><?=  basename($textname);  ?> </span></button>

          <?php
        } ?>
      <?php } ?>
       </form>
      <?php
      if(isset($_POST['3'])){
        ?>

        <img src="img/3.png" alt="notfound"/>
        <form  action="myname.php" >

      <?php
        foreach (glob("scores/2-1/*") as $textname) {
          ?>
          <button class="buttons" style="vertical-align:middle" name = "classes" value="<?=   $textname;   ?>"><span><?=  basename($textname);  ?> </span></button>

          <?php
        } ?>
      <?php } ?>
       </form>
      <?php
      if(isset($_POST['4'])){
        ?>

        <img src="img/4.png" alt="notfound"/>
        <form  action="myname.php" >

      <?php
        foreach (glob("scores/2-2/*") as $textname) {
          ?>
          <button class="buttons" style="vertical-align:middle" name = "classes" value="<?=  $textname;   ?>"><span><?=  basename($textname);  ?> </span></button>

          <?php
        } ?>
      <?php } ?>
       </form>
      <?php
      if(isset($_POST['5'])){
        ?>

        <img src="img/5.png" alt="notfound"/>
        <form  action="myname.php" >

      <?php
        foreach (glob("scores/3-1/*") as $textname) {
          ?>
          <button class="buttons" style="vertical-align:middle" name = "classes" value="<?=  $textname;  ?>"><span><?=  basename($textname);  ?> </span></button>

          <?php
        } ?>
      <?php } ?>
       </form>
      <?php
      if(isset($_POST['6'])){
        ?>
        <p>정의할수 없습니다</P>


      <?php } ?>
      <?php
      if(isset($_REQUEST['classes'])){
         $name = $_REQUEST['classes'];
         ?>
         <a href="<?=$name; ?>"></a>
         <?php
           foreach (glob("$name/*") as $textname) {
             ?>
             <a href="<?=$textname;?>">
             <button class="buttons" style="vertical-align:middle" value="<?=  $textname;  ?>"><span><?=  basename($textname);  ?> </span></button>
             </a>
             <?php
           } ?>
         <?php
        } ?>





    </div>
  </div>
</body>
</html>
