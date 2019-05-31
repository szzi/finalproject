<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분

include ("configure.php");
include ("connect.php");

$connect=connect_db($host, $dbid, $dbpw, $dbname);
$userid = $_POST['user_id'];
$data_stream = "'".$_POST['user_id']."',password('".$_POST['user_pw']."'),'".$_POST['email']."'";

$sql = "SELECT user_id FROM user WHERE user_id = {$userid}";
$query = "insert into user(user_id,user_pw,email) values (".$data_stream.")";

$res = mysqli_query($connect,$sql);
echo $sql;
$exist = mysqli_num_rows($res);
echo '줄2';
echo $exist;

if($exist > 0){
        echo '이미 존재하는 아이디가 있습니다.';
        exit;
}else{
        $result = mysqli_query($connect, $query);
        
        mysqli_close($connect);
        
        echo '가입이 완료되었습니다. 메인 화면으로 이동합니다..';
        echo "<meta http-equiv='Refresh' content='2; URL=cleaningservice.html'>";
}


?>
