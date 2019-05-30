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
            <hr class="featurette-divider">
            <form action='service.cgi' method='post'>
                <input type='hidden' name='datad' value='data'>

                <table border=0 width=40% align=center cellpadding=5>
                    <tr>
                        <td colspan=2 style="font-size:200%;font-weight:bold">세탁 혹은 수선하실 것을 골라주세요</td>
                    </tr>

                    <tr>
                        <td colspan=2>&nbsp;</td>
                    </tr>

                    <tr>
                        <th>상의</th>
                        <td><input type='checkbox' name='a' value='Cardigan'>가디건
                            <input type="hidden" name="Cardigan" value="3000">
                            <input type='checkbox' name='a' value='Mustang'>무스탕
                            <input type="hidden" name="Mustang" value="12000">
                            <input type='checkbox' name='a' value='blouse'>블라우스
                            <input type="hidden" name="blouse" value="3000">
                            <input type='checkbox' name='a' value='shirt'>셔츠
                            <input type="hidden" name="셔츠" value="2000">
                            <input type='checkbox' name='a' value='sweater'>스웨터
                            <input type="hidden" name="sweater" value="3500">
                            <input type='checkbox' name='a' value='one piece'>원피스
                            <input type="hidden" name="one piece" value="6000">
                            <input type='checkbox' name='a' value='jacket'>자켓
                            <input type="hidden" name="jacket" value="6000">
                            <input type='checkbox' name='a' value='jumper'>점퍼
                            <input type="hidden" name="jumper" value="6000">
                            <input type='checkbox' name='a' value='Suit top'>정장상의
                            <input type="hidden" name="Suit top" value="5000">
                            <input type='checkbox' name='a' value='vest'>조끼
                            <input type="hidden" name="vest" value="3000">
                            <input type='checkbox' name='a' value='Coat'>코트
                            <input type="hidden" name="Coat" value="9000">
                            <input type='checkbox' name='a' value='T-shirt'>티셔츠
                            <input type="hidden" name="T-shirt" value="3000">
                            <input type='checkbox' name='a' value='Hood jumper'>후드집업
                            <input type="hidden" name="Hood jumper" value="5000">
                        </td>
                    </tr>
                    <tr>
                        <td colospan=2>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>하의</th>
                        <td><input type='checkbox' name='b' value='Pants'>바지
                            <input type="hidden" name="Pants" value="3000">
                            <input type='checkbox' name='b' value='shorts'>반바지
                            <input type="hidden" name="shorts" value="2500">
                            <input type='checkbox' name='b' value='skirt'>스커트
                            <input type="hidden" name="skirt" value="3000">
                            <input type='checkbox' name='b' value='Ski suit'>스키복
                            <input type="hidden" name="Ski suit" value="15000">
                            <input type='checkbox' name='b' value='Underwear'>정장하의
                            <input type="hidden" name="Underwear" value="3000">
                            <input type='checkbox' name='b' value='Training suit'>트레이닝복 하의
                            <input type="hidden" name="Training suit" value="3000">
                            <input type='checkbox' name='b' value='skirt'>치마
                            <input type="hidden" name="skirt" value="4000">
                        </td>
                    </tr>
                    <tr>
                        <td colospan=2>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>침구</th>
                        <td><input type='checkbox' name='c' value='blanket'>담요
                            <input type="hidden" name="blanket" value="5000">
                            <input type='checkbox' name='c' value='rug'>러그
                            <input type="hidden" name="rug" value="1000">
                            <input type='checkbox' name='c' value='mat'>매트
                            <input type="hidden" name="mat" value="10000">
                            <input type='checkbox' name='c' value='mattress cover'>매트리스커버
                            <input type="hidden" name="mattress cover" value="5000">
                            <input type='checkbox' name='c' value='Pillow'>베개
                            <input type="hidden" name="Pillow" value="5000">
                            <input type='checkbox' name='c' value='Pillow cover'>배게커버
                            <input type="hidden" name="Pillow cover" value="2000">
                            <input type='checkbox' name='c' value='Yo'>요
                            <input type="hidden" name="Yo" value="14000">
                            <input type='checkbox' name='c' value='blanket'>이불
                            <input type="hidden" name="blanket" value="10000">
                            <input type='checkbox' name='c' value='blanket cover'>이불커버
                            <input type="hidden" name="blanket cover" value="6000">
                            <input type='checkbox' name='c' value='curtain'>커튼
                            <input type="hidden" name="curtain" value="15000">
                            <input type='checkbox' name='c' value='Topper'>토퍼
                            <input type="hidden" name="Topper" value="20000">
                            <input type='checkbox' name='c' value='pad'>패드
                            <input type="hidden" name="pad" value="4000">
                        </td>
                    </tr>
                    <tr>
                        <td colospan=2>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>신발</th>
                        <td><input type='checkbox' name='d' value='shoes'>구두
                            <input type="hidden" name="shoes" value="10000">
                            <input type='checkbox' name='d' value='Shoes'>단화
                            <input type="hidden" name="Shoes" value="10000">
                            <input type='checkbox' name='d' value='Hiking'>등산화
                            <input type="hidden" name="Hiking" value="10000">
                            <input type='checkbox' name='d' value='slipper'>슬리퍼
                            <input type="hidden" name="slipper" value="10000">
                            <input type='checkbox' name='d' value='Ugg boots'>어그부츠
                            <input type="hidden" name="Ugg boots" value="10000">
                            <input type='checkbox' name='d' value='sports shoes'>운동화
                            <input type="hidden" name="sports shoes" value="10000">
                            <input type='checkbox' name='d' value='Walker'>워커
                            <input type="hidden" name="Walker" value="10000">
                        </td>
                    </tr>
                    <tr>
                        <td colospan=2>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>가방</th>
                        <td><input type='checkbox' name='e' value='Mountain climbing'>등산
                            <input type="hidden" name="Mountain climbing" value="8000">
                            <input type='checkbox' name='e' value='Luxury'>명품
                            <input type="hidden" name="Luxury" value="50000">
                            <input type='checkbox' name='e' value='mini'>미니
                            <input type="hidden" name="mini" value="3000">
                            <input type='checkbox' name='e' value='backpack'>백팩
                            <input type="hidden" name="backpack" value="20000">
                            <input type='checkbox' name='e' value='Normal'>일반
                            <input type="hidden" name="Normal" value="15000">
                            <input type='checkbox' name='e' value='cloth'>천
                            <input type="hidden" name="cloth" value="10000">
                        </td>
                    </tr>
                    <tr>
                        <td colospan=2>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>악세사리</th>
                        <td><input type='checkbox' name='f' value='necktie'>넥타이
                            <input type="hidden" name="necktie" value="1500">
                            <input type='checkbox' name='f' value='hat'>모자
                            <input type="hidden" name="hat" value="3000">
                            <input type='checkbox' name='f' value='neck warmer'>목도리
                            <input type="hidden" name="neck warmer" value="3000">
                            <input type='checkbox' name='f' value='scarf'>스카프
                            <input type="hidden" name="scarf" value="2000">
                            <input type='checkbox' name='f' value='doll'>인형
                            <input type="hidden" name="doll" value="3000">
                            <input type='checkbox' name='f' value='Gloves'>장갑
                            <input type="hidden" name="Gloves" value="3000">

                        </td>
                    </tr>
                    <tr>
                        <td colospan=2>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>수선</th>
                        <td><input type='checkbox' name='g' value='T-shirt'>티셔츠 기장/소매기장/품
                            <input type="hidden" name="T-shirt" value="5000">
                            <input type='checkbox' name='g' value='Simple repair'>간단수선
                            <input type="hidden" name="Simple repair" value="3000">
                            <input type='checkbox' name='g' value='Rubber band'>고무밴드 교체
                            <input type="hidden" name="Rubber band" value="6000">
                            <input type='checkbox' name='g' value='Metal lock'>금속잠금 교체
                            <input type="hidden" name="Metal lock" value="3000">
                            <input type='checkbox' name='g' value='Shirt'>남방기장/소매기장/품
                            <input type="hidden" name="Shirt" value="6000">
                            <input type='checkbox' name='g' value='Nu Beam'>누빔
                            <input type="hidden" name="Nu Beam" value="3000">
                            <input type='checkbox' name='g' value='Pants'>정장바지,청바지,면바지통/기장
                            <input type="hidden" name="Pants" value="7000">
                            <input type='checkbox' name='g' value='top'>상의기장/품
                            <input type="hidden" name="top" value="15000">
                            <input type='checkbox' name='g' value='skirt'>치마, 원피스 통/기장
                            <input type="hidden" name="skirt" value="10000">
                            <input type='checkbox' name='g' value='bleaching'>표백
                            <input type="hidden" name="bleaching" value="3000">
                        </td>
                    </tr>
                    <tr>
                        <td colospan=2>&nbsp;</td>
                    </tr>

                    <!--시간 선택-->
                    <tr>
                        <td colspan=2 style="font-size:200%;font-weight:bold">세탁물 수거,배송 날짜 및 시간을 입력해주세요</td>
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
                    </tr>

                    <tr>
                        <td colspan=2 style="text-indent:10px">
                            <input type='submit' value='제출'>
                            <input type='reset' value='Clear'>
                        </td>
                    </tr>

                </table>
        </div>
    </div>


    <!--가격 table-->
    <div class="container marketing">
        <hr class="featurette-divider">
        <div>
            <h2 class="featurette-heading"><b class="text-muted">가격 안내</h2><br>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="top.php" onclick="window.open(this.href, '', ''); return false;">top</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bottom.php">bottom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bed.php">bed</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="shoes.php">shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bag.php">bag</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="acc.php">acc</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="alternation.php">reform</a>
                    </li>
                </ul>
    <br><br>

            <table id="top" class="table table-striped table-condensed table-bordered">
                <?php include 'top.php'; ?>
            </table>
            <table id="bottom" class="table table-striped table-condensed table-bordered">
                <?php include 'bottom.php'; ?>
            </table>
            <table id="bed" class="table table-striped table-condensed table-bordered">
                <?php include 'bed.php'; ?>
            </table>
            <table id="shoes" class="table table-striped table-condensed table-bordered">
                <?php include 'shoes.php'; ?>
            </table>
            <table id="bag" class="table table-striped table-condensed table-bordered">
                <?php include 'bag.php'; ?>
            </table>
            <table id="acc" class="table table-striped table-condensed table-bordered">
                <?php include 'acc.php'; ?>
            </table>
            <table id="alternation" class="table table-striped table-condensed table-bordered">
            <?php include 'alternation.php'; ?>
            </table>
        </div>
        <hr class="featurette-divider">
    </div>
    <!--지역 선택하기 북구동구서구중구, 그리고 textbox만들어서 상세주소 입력받기-->


    <hr class="featurette-divider">
    <!-- FOOTER -->
    <footer>
        <p style="text-align:center">&copy; Cleaning Service | 2019 KIM SEO JIN &middot; </p>
    </footer>

    </div><!-- /.container -->


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