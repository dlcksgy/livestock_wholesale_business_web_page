<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>(주)오트밀</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="order_page.css?ver=2" rel="stylesheet">

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
                      <a class="nav-link" href="login_popup.php"  style="color: #2E2E2E">로ㅁㅁ그인</a>
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


  <div id="empty"></div>

  <div id = "form">
    <br><br><h1>ORDER SHEET</h1><br>
    <p class="button"><a href="javascript:window.history.back();" class="btnSimple">이전페이지</a></p>

      <table id="order_production">
        <colgroup>
          <col style="width:35px" class="displaynone"/>
          <col style="width:200px"/>
          <col style="width:auto"/>
          <col style="width:100px"/>
          <col style="width:75px"/>
          <col style="width:98px"/>
          <col style="width:98px"/>
          <col style="width:85px"/>
          <col style="width:130px"/>
        </colgroup>
        <thead><tr>
          <th scope="col">
            <input type="checkbox" onclick=""/></th>
            <th scope="col">이미지</th>
            <th scope="col">상품정보</th>
            <th scope="col">판매가</th>
            <th scope="col">수량</th>
            <th scope="col">적립금</th>
            <th scope="col">배송구분</th>
            <th scope="col">배송비</th>
            <th scope="col">합계</th>
        </tr></thead>
        <tfoot><tr>
          <td></td>
          <td colspan="8">
            <span class="gLeft">[기본배송]</span> 상품구매금액 <strong>30,000<span class="displaynone"> (0)</span></strong><span class="displaynone"> + 부가세 0</span> + 배송비 <span id="domestic_ship_fee">2,500</span> <span class="displaynone"> - 상품할인금액 0 </span> = 합계 : <strong class="gIndent10"><span id="domestic_ship_fee_sum" class="txt12">32,500</span> won</strong> <span class="displaynone"></span>
          </td>
        </tr></tfoot>
        <tbody class="xans-element- xans-order xans-order-normallist center">
          <tr class="order_num_">
            <td><input id="chk_order_cancel_list0" name="chk_order_cancel_list_" value="12277:000A:F:4620813" type="checkbox"  /></td>
            <td><a href="information.php"><img src="./img/hanwoo/1.jpg" width="300"/></a></td>
            <td>
              <a href="information.php"><strong>name</strong></a>
              <p class="gBlank5 displaynone">유효기간 : </p>
            </td>
            <td>
              <div>
                <strong>30,000 won</strong><p class="displaynone"></p>
              </div>
            </td>
            <td>1</td>
            <td><span class="txtInfo">300 won</span></td>
            <td><div class="txtInfo">기본배송<br/></div></td>
            <td rowspan="1" class="">[조건]</td>
            <td><strong>30,000 won</strong></td>
          </tr>
        </tbody>

      </table><br><br><br><br>
      <h2>주문 정보</h2>
      <p class="required"><img src="./img/ico_required.gif"/> 필수입력사항</p>

      <table id="order_info">
        <colgroup>
          <col style="width:139px;"/>
          <col style="width:auto;"/>
        </colgroup>
        <tbody class="address_form  ">
        <tr>
          <th scope="row">주문하시는 분 <img src="./img/ico_required.gif" alt="필수"/></th>
          <td><input id="oname" name="oname" fw-filter="isFill" fw-label="주문자 성명" fw-msg="" class="inputTypeText" placeholder="" size="15" value="" type="text"  /></td>
        </tr>
        <tr class="">
          <th scope="row">주소 <img src="./img/ico_required.gif" alt="필수"/></th>
          <td>
            <input id="ozipcode1" name="ozipcode1" fw-filter="isFill" fw-label="주문자 우편번호1" fw-msg="" class="inputTypeText" placeholder="" size="6" maxlength="6" readonly="1" value="" type="text"  />                        <a href="#none" id="btn_search_ozipcode" class="btnzip">우편번호</a><br/>
            <input id="oaddr1" name="oaddr1" fw-filter="isFill" fw-label="주문자 주소1" fw-msg="" class="inputTypeText" placeholder="" size="40" readonly="1" value="" type="text"  /> <span class="txtInfo">기본주소</span><br/>
            <input id="oaddr2" name="oaddr2" fw-filter="isFill" fw-label="주문자 주소2" fw-msg="" class="inputTypeText" placeholder="" size="40" value="" type="text"  /> <span class="txtInfo">나머지주소</span><span class="grid displaynone">(선택입력가능)</span>
          </td>
        </tr>
        <tr class="">
          <th scope="row">일반전화</th>
          <td>
            <select id="ophone1_1" name="ophone1_[]" fw-filter="isNumber&isFill" fw-label="주문자 전화번호" fw-alone="N" fw-msg="" >
              <option value="02">02</option>
              <option value="031">031</option>
              <option value="032">032</option>
              <option value="033">033</option>
              <option value="041">041</option>
              <option value="042">042</option>
              <option value="043">043</option>
              <option value="044">044</option>
              <option value="051">051</option>
              <option value="052">052</option>
              <option value="053">053</option>
              <option value="054">054</option>
              <option value="055">055</option>
              <option value="061">061</option>
              <option value="062">062</option>
              <option value="063">063</option>
              <option value="064">064</option>
              <option value="0502">0502</option>
              <option value="0503">0503</option>
              <option value="0504">0504</option>
              <option value="0505">0505</option>
              <option value="0506">0506</option>
              <option value="0507">0507</option>
              <option value="070">070</option>
              <option value="010">010</option>
              <option value="011">011</option>
              <option value="016">016</option>
              <option value="017">017</option>
              <option value="018">018</option>
              <option value="019">019</option>
            </select>-<input id="ophone1_2" name="ophone1_[]" maxlength="4" fw-filter="isNumber&isFill" fw-label="주문자 전화번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  />-<input id="ophone1_3" name="ophone1_[]" maxlength="4" fw-filter="isNumber&isFill" fw-label="주문자 전화번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  /></td>
          </tr>
          <tr class="">
            <th scope="row">휴대전화 <img src="//img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수"/>
            </th>
            <td><select id="ophone2_1" name="ophone2_[]" fw-filter="isNumber" fw-label="주문자 핸드폰번호" fw-alone="N" fw-msg="" >
              <option value="010">010</option>
              <option value="011">011</option>
              <option value="016">016</option>
              <option value="017">017</option>
              <option value="018">018</option>
              <option value="019">019</option>
            </select>-<input id="ophone2_2" name="ophone2_[]" maxlength="4" fw-filter="isNumber" fw-label="주문자 핸드폰번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  />-<input id="ophone2_3" name="ophone2_[]" maxlength="4" fw-filter="isNumber" fw-label="주문자 핸드폰번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  /></td>
          </tr>
          <tr class="">
            <th scope="row">e-mail <img src="//img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수"/>
            </th>
            <td><input id="oemail_1" name="oemail_[]" maxlength="20" fw-filter="isString" fw-label="주문자 이메일" fw-alone="N" fw-msg="" size="20" value="" type="text"  />
              @<input id="oemail_2" name="oemail_[]" maxlength="20" fw-filter="isString" fw-label="주문자 이메일" fw-alone="N" fw-msg="" size="20" value="" type="text"  />
              <select id="oemail_3" name="oemail_[]" fw-label="이메일" fw-alone="N" fw-msg="" >
                <option value="naver">naver.com</option>
                <option value="daum">daum.net</option>
                <option value="gmail">gmail.com</option>
                <option value="hotmail">hotmail.com</option>
                <option value="nate">nate.com</option>
                <option value="yahoo">yahoo.com</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table><br><br><br><br>
      <h2>배송 정보</h2>
      <p class="required"><img src="./img/ico_required.gif"/> 필수입력사항</p>

      <table id="order_info">
        <colgroup>
          <col style="width:139px;"/>
          <col style="width:auto;"/>
        </colgroup>
        <tbody class="address_form  ">
          <tr>
            <th scope="row">배송지 선택</th>
            <td><input id="same" name="oshipping" type="radio"  />주문자 정보와 동일 <input id="new" name="oshipping" type="radio"  />새로운 배송지 </td>
          </tr>
        <tr>
          <th scope="row">받으시는 분 <img src="./img/ico_required.gif" alt="필수"/></th>
          <td><input id="oname" name="oname" fw-filter="isFill" fw-label="주문자 성명" fw-msg="" class="inputTypeText" placeholder="" size="15" value="" type="text"  /></td>
        </tr>
        <tr class="">
          <th scope="row">주소 <img src="./img/ico_required.gif" alt="필수"/></th>
          <td>
            <input id="ozipcode1" name="ozipcode1" fw-filter="isFill" fw-label="주문자 우편번호1" fw-msg="" class="inputTypeText" placeholder="" size="6" maxlength="6" readonly="1" value="" type="text"  />                        <a href="#none" id="btn_search_ozipcode" class="btnzip">우편번호</a><br/>
            <input id="oaddr1" name="oaddr1" fw-filter="isFill" fw-label="주문자 주소1" fw-msg="" class="inputTypeText" placeholder="" size="40" readonly="1" value="" type="text"  /> <span class="txtInfo">기본주소</span><br/>
            <input id="oaddr2" name="oaddr2" fw-filter="isFill" fw-label="주문자 주소2" fw-msg="" class="inputTypeText" placeholder="" size="40" value="" type="text"  /> <span class="txtInfo">나머지주소</span><span class="grid displaynone">(선택입력가능)</span>
          </td>
        </tr>
        <tr class="">
          <th scope="row">일반전화</th>
          <td>
            <select id="ophone1_1" name="ophone1_[]" fw-filter="isNumber&isFill" fw-label="주문자 전화번호" fw-alone="N" fw-msg="" >
              <option value="02">02</option>
              <option value="031">031</option>
              <option value="032">032</option>
              <option value="033">033</option>
              <option value="041">041</option>
              <option value="042">042</option>
              <option value="043">043</option>
              <option value="044">044</option>
              <option value="051">051</option>
              <option value="052">052</option>
              <option value="053">053</option>
              <option value="054">054</option>
              <option value="055">055</option>
              <option value="061">061</option>
              <option value="062">062</option>
              <option value="063">063</option>
              <option value="064">064</option>
              <option value="0502">0502</option>
              <option value="0503">0503</option>
              <option value="0504">0504</option>
              <option value="0505">0505</option>
              <option value="0506">0506</option>
              <option value="0507">0507</option>
              <option value="070">070</option>
              <option value="010">010</option>
              <option value="011">011</option>
              <option value="016">016</option>
              <option value="017">017</option>
              <option value="018">018</option>
              <option value="019">019</option>
            </select>-<input id="ophone1_2" name="ophone1_[]" maxlength="4" fw-filter="isNumber&isFill" fw-label="주문자 전화번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  />-<input id="ophone1_3" name="ophone1_[]" maxlength="4" fw-filter="isNumber&isFill" fw-label="주문자 전화번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  /></td>
          </tr>
          <tr class="">
            <th scope="row">휴대전화 <img src="//img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수"/>
            </th>
            <td><select id="ophone2_1" name="ophone2_[]" fw-filter="isNumber" fw-label="주문자 핸드폰번호" fw-alone="N" fw-msg="" >
              <option value="010">010</option>
              <option value="011">011</option>
              <option value="016">016</option>
              <option value="017">017</option>
              <option value="018">018</option>
              <option value="019">019</option>
            </select>-<input id="ophone2_2" name="ophone2_[]" maxlength="4" fw-filter="isNumber" fw-label="주문자 핸드폰번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  />-<input id="ophone2_3" name="ophone2_[]" maxlength="4" fw-filter="isNumber" fw-label="주문자 핸드폰번호" fw-alone="N" fw-msg="" size="4" value="" type="text"  /></td>
          </tr>
          <tr class="">
            <th scope="row">e-mail <img src="//img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수"/>
            </th>
            <td><input id="oemail_1" name="oemail_[]" maxlength="20" fw-filter="isString" fw-label="주문자 이메일" fw-alone="N" fw-msg="" size="20" value="" type="text"  />
              @<input id="oemail_2" name="oemail_[]" maxlength="20" fw-filter="isString" fw-label="주문자 이메일" fw-alone="N" fw-msg="" size="20" value="" type="text"  />
              <select id="oemail_3" name="oemail_[]" fw-label="이메일" fw-alone="N" fw-msg="" >
                <option value="naver">naver.com</option>
                <option value="daum">daum.net</option>
                <option value="gmail">gmail.com</option>
                <option value="hotmail">hotmail.com</option>
                <option value="nate">nate.com</option>
                <option value="yahoo">yahoo.com</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
  </div>

<br><br><br><br><br><br>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
