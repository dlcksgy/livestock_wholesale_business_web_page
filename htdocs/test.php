<!-- 쿠키 기초... 생성하는법 -->

<?php
//쿠키 생성
setcookie('cookie_Test', "쿠키생성 성공", time() + 3600);

//쿠키 출력
echo $_COOKIE['cookie_Test'];

//쿠키 삭제
unset($_COOKIE["cookie_Test"]);

 ?>
