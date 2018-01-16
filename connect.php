<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = SHA1($_POST['pw']);
$sql = "SELECT * FROM `user` where id = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
if ($id != null && $pw != null && $row[0] == $id && $row[1] == $pw) {
    $_SESSION['id'] = $id;
    echo '<p align="center">登入成功</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
} else {
    echo '<p align="center">登入失敗</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
