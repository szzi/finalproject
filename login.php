<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분

include ("configure.php");
include ("connect.php");

$connect=connect_db($host, $dbid, $dbpw, $dbname);
// $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
// if (mysqli_connect_error()) {
//     exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
// }

extract($_POST); 
$userid = $_POST['user_id'];
$q = "SELECT user_id FROM user WHERE user_id = {$userid}";
$result = mysqli_query($connect,$q);
$res = mysqli_num_rows($result);
if($result==1) {
    //해당 ID 의 회원이 존재할 경우
    // 암호가 맞는지를 확인

    $encryped_pass = sha1($user_pw);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if( $row['pw'] == $encryped_pass ) {
        // 올바른 정보
        echo '성공';
        // header("Location: http://mydomain.com/member/login_done.php");
        exit();
    }
    else {
        // 암호가 틀렸음
        echo 'wrong password';
    }

}
else {
    // 없거나, 비정상
    echo '실패';
}

