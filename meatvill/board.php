<!doctype html>
<link rel="stylesheet" href="board.css"/>
<script type="text/javascript" src="board.js"></script>
<html>
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
    <title>board</title>
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
    <table id="layout">
      <td  id="index_section">
        <div>
          <table id = "index_table" width = 100%>
            <tr><th id = "idex"><h2>INDEX</h2></th></tr>
            <tr><th>
              <div id = "index_contents">
                <button>title1</button><br>
                <button>title2</button><br>
                <button>title3</button>
              </div>
            </th></tr>
          </table>
        </div>
      </td>
      <td id="board">
        <div>
          <h1 id="title">Title</h1>
          <div id="sort">
            <button>sort</button>
            <button>listview</button>
            <button>gridview</button>
          </div>
          <div id="contents">
            <div id = "name">
              <div>information</div>
              price&#x1F609;
            </div>
          </div>
          <div id="pageBtn">
            <button>1</button>
          </div>

        </div>
      </td>
    </table>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

  </body>
</html>
