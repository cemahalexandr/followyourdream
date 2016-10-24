<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php include_once "../inc/functions.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);


// uploads images
$upcomingEventsBlockImgArr = $_FILES['upcomingEventsBlockImgArr'];
for ($i = 0; $i < 6; $i++){
    if ($upcomingEventsBlockImgArr['name'][$i] == ''){
//        continue;
    } else {
        $extension = pathinfo($_FILES['upcomingEventsBlockImgArr']['name'][$i]);
        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
        $fileName = uniqid() . "." . $extension['extension'];
        $uploadfile = $uploaddir . $fileName;
        move_uploaded_file($_FILES['upcomingEventsBlockImgArr']['tmp_name'][$i], $uploadfile); //какой файл загружать и куда
        $pos = strpos($uploadfile, "img");
        $uploadfile = substr($uploadfile, $pos);
        $db_query = "UPDATE indexUpcomingEvents SET upcomingEventsBlockImgSrc = '$uploadfile' WHERE id=$i+1";
        $db_result = mysql_query($db_query, $db_connect);
    }
    $i_text = $i+1;

    $upcomingEventsBlockImgCheckpoint = $_POST["upcomingEventsBlockImgCheckpoint-$i_text"];
    $upcomingEventsBlockImgDate = $_POST["upcomingEventsBlockImgDate-$i_text"];
    $upcomingEventsBlockImgPrice = $_POST["upcomingEventsBlockImgPrice-$i_text"];
    $upcomingEventsBlockImgLink = $_POST["upcomingEventsBlockImgLink-$i_text"];
    $db_query = "UPDATE indexUpcomingEvents 
    SET   upcomingEventsBlockImgCheckpoint = '$upcomingEventsBlockImgCheckpoint', 
          upcomingEventsBlockImgDate = '$upcomingEventsBlockImgDate',
          upcomingEventsBlockImgPrice = '$upcomingEventsBlockImgPrice',
          upcomingEventsBlockImgLink = '$upcomingEventsBlockImgLink'
      WHERE id=$i+1";
    $db_result = mysql_query($db_query, $db_connect);
}
//// инифиализация переменных
$upcomingEventsHeaderText = $_POST["upcomingEventsHeaderText"];
$upcomingEventsTextButton = $_POST["upcomingEventsTextButton"];
$db_query = "
  UPDATE indexUpcomingEvents
  SET upcomingEventsHeaderText = '$upcomingEventsHeaderText',
      upcomingEventsTextButton = '$upcomingEventsTextButton'
  WHERE id=1
";

$db_result = mysql_query($db_query, $db_connect);
mysql_close($db_connect);












//$headerLinkIn = $_POST['headerLinkIn'];
//$headerTitle = $_POST['headerTitle'];
//$headerDescription = $_POST['headerDescription'];
//$headerSmallText = $_POST['headerSmallText'];
//$headerButtonText = $_POST['headerButtonText'];
//$headerCarouselSrc = $_POST['headerCarouselSrc']; //текущие ссылки на изображения

//files
//$headerLogoLink = $_POST['headerLogoLink'];
//$headerCarouselNewImg = $_FILES['headerCarouselNewImg'];


// download logo img
//if ($headerLogoLink == NULL && $_FILES['headerLogoLink']['name'] != ''){
//    $headerLogoLink = uploadFile('headerLogoLink', -1);
//}


//$uploadsString = loopUploadManyFiles($headerCarouselNewImg, 'headerCarouselNewImg');
//$headerCarouselSrc .= $uploadsString;


//$db_query = "
//  UPDATE indexHeader
//  SET headerLogoLink = '$headerLogoLink',
//      headerLinkFb = '$headerLinkFb',
//      headerLinkIn = '$headerLinkIn',
//      headerTitle = '$headerTitle',
//      headerDescription = '$headerDescription',
//      headerSmallText = '$headerSmallText',
//      headerButtonText = '$headerButtonText',
//      headerCarouselSrc = '$headerCarouselSrc'
//  WHERE id=1
//";








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



  
