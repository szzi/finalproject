<?
error_reporting(E_ALL);
ini_set("display_errors", 1);  //에러 발생시 표시하기 위한 부분

//-- DB 연결
include ("configure.php");
include ("connectlist.php");

$connect=connect_db($host, $dbid, $dbpw, $dbname); 
mysql_select_db($mysql_db, $connect); // DB 선택

$sql = "select * from top";
$rs = mysql_query($sql);
?>

<style>
.title { text-align:center; background:#EBEBEB; }
.num { text-align:center; }
</style>

<table width="60%" border=1 cellspacing=0 cellpadding=5>
<tr class="title">
<td>type</td><td>name</td><td>price</td>
</tr>
<? 
while($rd = mysql_fetch_array($rs)){
    echo "<tr>";
    echo "<td>".$rd[type]."</td>";
    // <td>
    //     .$rd[name]
    // </td>
    // <td>
    //     .$rd[price]원
    // </td>
</tr>
";
}
mysql_close();
?>
</table> 
