<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php include_once "../inc/functions.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);




// download image
$withUsNewImg = $_FILES['withUsNewImg'];
if ($withUsNewImg['name'] && $withUsNewImg['type']){
    $extension = pathinfo($_FILES['withUsNewImg']['name']);
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
    $fileName = uniqid() . "." . $extension['extension'];
    $uploadfile = $uploaddir . $fileName;
    move_uploaded_file($_FILES['withUsNewImg']['tmp_name'], $uploadfile); //какой файл загружать и куда
    $pos = strpos($uploadfile, "img");
    $uploadfile = substr($uploadfile, $pos);
    $db_query = "UPDATE indexWithUs SET withUsBgImg = '$uploadfile' WHERE id=1";
    $db_result = mysql_query($db_query, $db_connect);
}

// update text
$withUsHeaderText = $_POST["withUsHeaderText"];
$withUsTextarea = $_POST["withUsTextarea"];
$withUsUnderText = $_POST["withUsUnderText"];
$withUsUnderTextButton = $_POST["withUsUnderTextButton"];
$db_query = "UPDATE indexWithUs 
  SET   withUsHeaderText = '$withUsHeaderText',
        withUsTextarea = '$withUsTextarea',
        withUsUnderText = '$withUsUnderText',
        withUsUnderTextButton = '$withUsUnderTextButton'
        
  WHERE id=1";
$db_result = mysql_query($db_query, $db_connect);

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



  
