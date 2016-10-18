<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php include_once "../inc/functions.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);

// uploads images
$aboutComunityNewImg = $_FILES['aboutComunityNewImg'];
for ($i = 0; $i < 4; $i++){
    if ($aboutComunityNewImg['name'][$i] == ''){
//        continue;
    } else {
        $extension = pathinfo($_FILES['aboutComunityNewImg']['name'][$i]);
        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
        $fileName = uniqid() . "." . $extension['extension'];
        $uploadfile = $uploaddir . $fileName;
        move_uploaded_file($_FILES['aboutComunityNewImg']['tmp_name'][$i], $uploadfile); //какой файл загружать и куда
        $pos = strpos($uploadfile, "img");
        $uploadfile = substr($uploadfile, $pos);
        $db_query = "UPDATE indexAboutComunity SET aboutComunityNewImg = '$uploadfile' WHERE id=$i+1";
        $db_result = mysql_query($db_query, $db_connect);
    }
    $i_text = $i+1;

    $aboutComunityImgHeader = $_POST["aboutComunityImgHeader-$i_text"];
    $aboutComunityImgText = $_POST["aboutComunityImgText-$i_text"];
    $aboutComunityImgYellowText = $_POST["aboutComunityImgYellowText-$i_text"];
    $db_query = "UPDATE indexAboutComunity SET 
      aboutComunityImgHeader = '$aboutComunityImgHeader', 
      aboutComunityImgText = '$aboutComunityImgText',
      aboutComunityImgYellowText = '$aboutComunityImgYellowText'
      WHERE id=$i+1";
    $db_result = mysql_query($db_query, $db_connect);
}
// инифиализация переменных
$aboutComunityHeaderText = $_POST["aboutComunityHeaderText"];
$aboutComunitySubHeaderText = $_POST["aboutComunitySubHeaderText"];
$aboutComunityImgYellowText = $_POST["aboutComunityImgYellowText"];
$db_query = "
  UPDATE indexAboutComunity
  SET aboutComunityHeaderText = '$aboutComunityHeaderText', 
      aboutComunitySubHeaderText = '$aboutComunitySubHeaderText', 
      aboutComunityImgYellowText = '$aboutComunityImgYellowText'
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



  
