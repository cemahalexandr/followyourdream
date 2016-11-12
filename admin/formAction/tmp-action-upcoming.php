<?

$tmpMetaTitle = $_POST['tmpMetaTitle'];
$tmpMetaDescription = $_POST['tmpMetaDescription'];


$db_query = "
  UPDATE tmpUpcoming
  SET tmpMetaTitle = '$tmpMetaTitle',
      tmpMetaDescription = '$tmpMetaDescription',
  WHERE tmpGeneralId='$generalId'
";


$db_result = mysql_query($db_query, $db_connect);
mysql_close($db_connect);





//// загрузка картинки для фонового изображения шапки
//$bgImgFile = $_FILES["modalHeaderBgImg"];
//$bg_img_path = '';
//if ($bgImgFile['name'][0] == false){
//    $bg_img_path = $_POST["modalHeaderBgImgCurrent"];
//} else {
//    $bg_img_path = unique_upload_one_img('modalHeaderBgImg');
//}
//$db_query = "UPDATE modalData SET bgImg = '$bg_img_path' WHERE id='$idRow'";
//$db_result = mysql_query($db_query, $db_connect);
//
//
////формирование строки для первого организатора
//function organizator_fields_to_string($current_number){
//    $organizator_arr = array(7);
//    $organizator_img = $_FILES["organizator_img_$current_number"];
//
//    if ($organizator_img['name'][0] == false){
//        $organizator_img = $_POST["currentImgSrc_$current_number"];
//    } else {
//        $organizator_img_selector = "organizator_img_" . $current_number;
//        $organizator_img = unique_upload_one_img($organizator_img_selector);
//    }
//    $organizator_arr[0] = $organizator_img;
//    $organizator_arr[1] = $_POST["organizator_name_$current_number"];
//    $organizator_arr[2] = $_POST["organizator_position_$current_number"];
//    $organizator_arr[3] = $_POST["organizator_fb_$current_number"];
//    $organizator_arr[4] = $_POST["organizator_skype_$current_number"];
//    $organizator_arr[5] = $_POST["organizator_email_$current_number"];
//    $organizator_arr[6] = $_POST["organizator_phone_$current_number"];
//    $organizator_string = implode("|", $organizator_arr);
//    return $organizator_string;
//}
//
//
////обработка полей input
//$generalId = $_POST['generalId'];
//$generalMonth = $_POST['generalMonth'];
//$header = $_POST['header'];
//$subHeader = $_POST['subHeader'];
//$infoDate = $_POST['infoDate'];
//$infoImportant = $_POST['infoImportant'];
//$infoPrice = $_POST['infoPrice'];
//$listMain = $_POST['listMain'];
//$textOverForm = $_POST['textOverForm'];
//$textUnderForm = $_POST['textUnderForm'];
//$howJoin = $_POST['howJoin'];
//$organizator_1 = organizator_fields_to_string(1);
//$organizator_2 = organizator_fields_to_string(2);
////var_dump($header);
////die();
//
//$db_query = "
//  UPDATE modalData
//  SET generalId = '$generalId',
//      generalMonth = '$generalMonth',
//      header = '$header',
//      subHeader = '$subHeader',
//      infoDate = '$infoDate',
//      infoImportant = '$infoImportant',
//      infoPrice = '$infoPrice',
//      listMain = '$listMain',
//      textOverForm = '$textOverForm',
//      textUnderForm = '$textUnderForm',
//      howJoin = '$howJoin',
//      org1 = '$organizator_1',
//      org2 = '$organizator_2'
//  WHERE id='$idRow'
//";

//$db_result = mysql_query($db_query, $db_connect);
//mysql_close($db_connect);

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




