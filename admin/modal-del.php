<meta charset="utf-8">
<?php include_once "inc/db.php"; ?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);

$id_from_get = $_GET['id'];

$db_query = mysql_query("DELETE FROM modalData WHERE id='$id_from_get'");

$db_result = mysql_query($db_query, $db_connect);
mysql_close($db_connect);


// так получаем URL, с которого пришёл посетитель
$back = $_SERVER['HTTP_REFERER']; // для справки, не обязательно создавать переменную
// Теперь создаём страницу, пересылающую
// в meta теге на предыдущую
echo "
<html>
<head>

  <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
</head>
</html>";
?>
<?php include_once "inc/scripts-admin-lte.php"; ?>
