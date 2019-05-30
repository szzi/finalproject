<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분

//-- DB 연결
$conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'cleaning');

echo "<h1>TOP</h1>";
$sql = "SELECT * FROM top";
$result = mysqli_query($conn, $sql);

echo <<< EOP
<tr>
<td>name</td><td>price</td>
</tr>
EOP;

while($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td><p>'.$row['name'].'</p></td>';
    echo '<td><p>'.$row['price'].'원</p></td>';
    echo '</tr>';
}
?>


