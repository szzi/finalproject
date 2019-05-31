<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분

//-- DB 연결
$conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'cleaning');

// echo "<h1>TOP</h1>";
$sql = "SELECT * FROM acc";
$result = mysqli_query($conn, $sql);

// label 태그 못넣겠다..
while($row = mysqli_fetch_array($result)) {
    echo "<input type='checkbox' name='".$row['name']. "' value='".$row['price']."' id='".$row['name']."' >";
    echo '<label for="'.$row['name'].'" >';
    echo $row['name'];
    echo '</label><br>';
}
?>


