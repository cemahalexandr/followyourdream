<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
//echo 'Успешно соединились';
//mysql_close($link);
?>