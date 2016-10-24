<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php include_once "../inc/functions.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);


// инифиализация переменных
$indexFooterSotialViber = $_POST["indexFooterSotialViber"];
$indexFooterSotialSkype = $_POST["indexFooterSotialSkype"];
$indexFooterSotialEmail = $_POST["indexFooterSotialEmail"];
$indexFooterButtonText = $_POST["indexFooterButtonText"];
$indexFooterSotialFb = $_POST["indexFooterSotialFb"];
$indexFooterSotialIn = $_POST["indexFooterSotialIn"];
$db_query = "
  UPDATE indexFooter
  SET indexFooterSotialViber = '$indexFooterSotialViber', 
      indexFooterSotialSkype = '$indexFooterSotialSkype', 
      indexFooterSotialEmail = '$indexFooterSotialEmail',
      indexFooterButtonText = '$indexFooterButtonText',
      indexFooterSotialFb = '$indexFooterSotialFb',
      indexFooterSotialIn = '$indexFooterSotialIn'
  WHERE id=1
";
$db_result = mysql_query($db_query, $db_connect);





// phones
for ($i = 0; $i < 2; $i++){
    $i_text = $i+1;
    $indexFooterPhone = $_POST["indexFooterPhone-$i_text"];

    $db_query = "UPDATE indexFooter SET
      indexFooterPhone = '$indexFooterPhone'
      WHERE id=$i+1";
    $db_result = mysql_query($db_query, $db_connect);
}


//images
$indexFooterLogoLink = $_FILES['indexFooterLogoLink'];
$indexFooterBgImg = $_FILES['indexFooterBgImg'];

if ($indexFooterLogoLink['name'] != "") {
    $extension = pathinfo($_FILES['indexFooterLogoLink']['name']);
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
    $fileName = uniqid() . "." . $extension['extension'];
    $uploadfile = $uploaddir . $fileName;
    move_uploaded_file($_FILES['indexFooterLogoLink']['tmp_name'], $uploadfile); //какой файл загружать и куда
    $pos = strpos($uploadfile, "img");
    $uploadfile = substr($uploadfile, $pos);
    $db_query = "UPDATE indexFooter SET indexFooterLogoLink = '$uploadfile' WHERE id=1";
    $db_result = mysql_query($db_query, $db_connect);
}
if ($indexFooterBgImg['name'] != "") {
    $extension = pathinfo($_FILES['indexFooterBgImg']['name']);
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
    $fileName = uniqid() . "." . $extension['extension'];
    $uploadfile = $uploaddir . $fileName;
    move_uploaded_file($_FILES['indexFooterBgImg']['tmp_name'], $uploadfile); //какой файл загружать и куда
    $pos = strpos($uploadfile, "img");
    $uploadfile = substr($uploadfile, $pos);
    $db_query = "UPDATE indexFooter SET indexFooterBgImg = '$uploadfile' WHERE id=1";
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



  
