<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분

//-- DB 연결
$conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'cleaning');

include ("configure.php");

echo "<h1>BED</h1>";
$sql = "SELECT * FROM bed";
$result = mysqli_query($conn, $sql);

echo <<< EOP
<table width="60%" border=1 cellspacing=0 cellpadding=5>
<tr>
<td>name</td><td>price</td>
</tr>
EOP;

while($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['price'].'원</td>';
    echo '</tr>';
}
echo '</table>'
?>


