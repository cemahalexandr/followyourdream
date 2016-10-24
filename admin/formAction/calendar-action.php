<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php include_once "../inc/functions.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);

$calendarBgImgArr = $_FILES['calendarBgImgArr'];

for ($i = 0; $i < 12; $i++){
    

    if ($calendarBgImgArr['name'][$i] == ''){
//        continue;
    } else {
        $extension = pathinfo($_FILES['calendarBgImgArr']['name'][$i]);
        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
        $fileName = uniqid() . "." . $extension['extension'];
        $uploadfile = $uploaddir . $fileName;
        move_uploaded_file($_FILES['calendarBgImgArr']['tmp_name'][$i], $uploadfile); //какой файл загружать и куда
        $pos = strpos($uploadfile, "img");
        $uploadfile = substr($uploadfile, $pos);
        $db_query = "UPDATE calendar SET calendarBgImg = '$uploadfile' WHERE id=$i+1";
        $db_result = mysql_query($db_query, $db_connect);
    }

    $i_text = $i+1;
    $calendarNameMonth = $_POST["calendarNameMonth-$i_text"];
    $db_query = "UPDATE calendar SET
      calendarNameMonth = '$calendarNameMonth'
      WHERE id=$i+1";
    $db_result = mysql_query($db_query, $db_connect);
}


mysql_close($db_connect);




/*---------------------------------------------*/

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



  
