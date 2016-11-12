<?php
$db_connect = mysql_connect('localhost', 'root', '');
if (!$db_connect) {
    die('Ошибка соединения: ' . mysql_error());
}

//echo 'Успешно соединились';
//mysql_close($link);
?>