<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>세탁 전문 서비스, Clean And White</title>

    <!-- Bootstrap core CSS -->

    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="service.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="cleaningservice.html">Clean and White</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="cleaningservice.html">Home</a></li>
                    <li><a href="info.html">서비스 안내</a></li>
                    <li class="active"><a href="service.php">서비스 이용</a></li>
                    <li><a href="signup.html">회원가입</a></li>
                    <li><a href="login.html">로그인</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!--옷,의류 체크박스 만들기-->
    <div class="bodycontainer">
        <hr>
        <div>
            <h2 class="featurette-heading"><b class="text-muted">서비스 이용</h2><br>
            <p class="lead">가격은 아래의 <b>가격안내</b>를 참조해 주세요</p>
            <hr>
            <form action='cal.php' method='post'>
                <input type='hidden' name='datad' value='data'>
                <div>
                    <div class="submsg" style="margin-bottom:20px">세탁 혹은 수선하실 것을 골라주세요</div>
                    <div class="main_check">
                        <div class="sub_check">
                            <p>상의</p>
                            <div class="checks" id="scroll">
                                <?php include 'checktop.php'; ?>
                            </div>
                        </div>
                        <div class="sub_check">
                            <p>하의</p>
                            <div class="checks" id="scroll">
                                <?php include 'checkbottom.php'; ?>
                            </div>
                        </div>
                        <div class="sub_check">
                            <p>침구</p>
                            <div class="checks" id="scroll">
                                <?php include 'checkbed.php'; ?>
                            </div>
                        </div>
                        <div class="sub_check">
                            <p>신발</p>
                            <div class="checks" id="scroll">
                                <?php include 'checkshoes.php'; ?>
                            </div>
                        </div>
                        <div class="sub_check">
                            <p>가방</p>
                            <div class="checks" id="scroll">
                                <?php include 'checkbag.php'; ?>
                            </div>
                        </div>
                        <div class="sub_check">
                            <p>기타</p>
                            <div class="checks" id="scroll">
                                <?php include 'checkacc.php'; ?>
                            </div>
                        </div>
                        <div class="sub_check">
                            <p>수선</p>
                            <div class="checks" id="scroll">
                                <?php include 'checkalternation.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn_submit" type='submit' value='제출'>제출</button>
                <button class="btn_submit" type='reset' value='Clear'>clear</button>
            </form>
        </div>
    <!-- form 끝 -->
    <!-- 이거순 수선코드 -->
            <!-- <td colspan=2 style="font-size:200%;font-weight:bold">세탁물 수거,배송 날짜 및 시간을 입력해주세요</td>
        </tr>
        <tr>
            <td colspan=2>&nbsp;</td>
        </tr>

        <tr>
            <th>수거 시간</th>
            <td>
                <input type='radio' name='before' value='11 14'>11시~14시
                <input type='radio' name='before' value='14 17'>14시~17시
                <input type='radio' name='before' value='17 20'>17시~20시
                날짜 : <input type="text" name="bdate" placeholder="ex:20181212">
            </td>
        </tr>

        <tr>
            <td colspan=2>&nbsp;</td>
        </tr>

        <tr>
            <th>배송 시간</th>
            <td>
                <input type='radio' name='after' value='11 14'>11시~14시
                <input type='radio' name='after' value='14 17'>14시~17시
                <input type='radio' name='after' value='17 20'>17시~20시
                날짜 : <input type="text" name="adate" placeholder="ex:20181212"></td>
        </tr> -->

        <div class="container marketing">
            <hr class="featurette-divider">
            <div>
                <h2 class="featurette-heading"><b class="text-muted">가격 안내</h2><br>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="show('top'); return false">상의</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="show('bottom'); return false">하의</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="show('bed'); return false">침구</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="show('shoes'); return false">신발</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="show('bag'); return false">가방</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="show('acc'); return false">기타</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="show('alternation'); return false">수선</a>
                    </li>
                </ul>
                <br><br>

                <div id="top" style="display:none">
                    <table class="table table-striped table-condensed table-bordered">
                        <?php include 'top.php'; ?>
                    </table>
                </div>
                <div id="bottom" style="display:none">
                    <table class="table table-striped table-condensed table-bordered">
                        <?php include 'bottom.php'; ?>
                    </table>
                </div>
                <div id="bed" style="display:none">
                    <table class="table table-striped table-condensed table-bordered">
                        <?php include 'bed.php'; ?>
                    </table>
                </div>
                <div id="shoes" style="display:none">

                    <table class="table table-striped table-condensed table-bordered">
                        <?php include 'shoes.php'; ?>
                    </table>
                </div>
                <div id="bag" style="display:none">
                    <table class="table table-striped table-condensed table-bordered">
                        <?php include 'bag.php'; ?>
                    </table>
                </div>
                <div id="acc" style="display:none">
                    <table class="table table-striped table-condensed table-bordered">
                        <?php include 'acc.php'; ?>
                    </table>
                </div>
                <div id="alternation" style="display:none">
                    <table class="table table-striped table-condensed table-bordered">
                        <?php include 'alternation.php'; ?>
                    </table>
                </div>
            </div>
            <hr class="featurette-divider">
        </div>
    </div>

    <hr class="featurette-divider">
    <!-- FOOTER -->
    <footer>
        <p style="text-align:center">&copy; Cleaning Service | 2019 KIM SEO JIN &middot; </p>
    </footer>

    </div><!-- /.container -->

    <script type="text/javascript">

        // var top = document.getElementById("top");
        // function visible() {
        //     top.style.display = "block";
        // }
        var before = null;
        function show(target) {
            if (before != null) {
                hide(before);
            }
            document.getElementById(target).style.display = 'block';
            before = target;
        }

        function hide(target) {
            document.getElementById(target).style.display = 'none';
        }
    </script>
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>