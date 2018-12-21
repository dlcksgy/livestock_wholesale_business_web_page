<div class="jumbotron">
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th> 번호 </th>
          <th> 게시글 제목 </th>
          <th> 작성자 </th>
          <th> 작성시간 </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $resource = mysql_query( " SELECT * FROM board" );
        $total_len = mysql_num_rows( $resource );
        if( isset($_GET[idx]) ) {
          $start = $_GET[idx] * 10;
          $sql = "SELECT * FROM board ORDER BY no DESC LIMIT $start, 10";
        } else {
          $sql = "SELECT * FROM board ORDER BY no DESC LIMIT 10";
        }
        $resource = mysql_query( $sql );
        $num = 1;
        while( $row = mysql_fetch_assoc( $resource ) ) {
          print "<tr>";
          print "<th scope='row'>$num</th>";
          print "<td>$row[title]</td>";
          print "<td>$row[writer]</td>";
          print "<td>$row[time]</td>";
          print "</tr>";
          $num++;
        }
          $count = (int)($total_len / 10);
          if( $total_len % 10 ) { $count++; }
          print "<tr>";
          print "<td colspan=4 align=center>";
              for( $i = 0; $i < $count; $i++ ) {
                print "<a href=http://192.168.12.100/index.php?idx={$i}> [";
                  $j = $i+1;
                  print $j;
                  print "] </a>";
                }
                print "</td>";
                print "</tr>";
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-10 mb-4">
          <h3>1대1 문의하기</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>이름</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>핸드폰번호</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>답변 받으실 이메일 주소</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>내용</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-info btn-block my-4" id="sendMessageButton">문의하기</button>
          </form>
        </div>
