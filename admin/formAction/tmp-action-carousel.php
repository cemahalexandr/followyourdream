<?

$tmp_carousel_string = "";
$tmp_carousel_item_src = "";


for ($i = 0; $i < 8; $i++){
    // если есть картинка
    if (!empty($_POST["tmpCarouselSrcPost-$i"])){
        $tmp_carousel_string .= $_POST["tmpCarouselSrcPost-$i"] . ",";
    } else if ($_FILES["tmpCarouselSrc-$i"]['name'] != ""){
        $tmp_carousel_item_src = unique_upload_one_img_without_zero("tmpCarouselSrc-$i");
        $tmp_carousel_string .= $tmp_carousel_item_src . ",";
    } else {
        $tmp_carousel_string .= "" . ",";
    }
}

$db_query = "UPDATE tmpCarousel SET tmpCarouselSrc = '$tmp_carousel_string' WHERE  generalId='$generalId'";
$db_result = mysql_query($db_query, $db_connect);


//echo $tmp_carousel_string;
//die;

//// update "upcoming events" (3x)
//for ($i = 0; $i < 3; $i++){
//    $id = $_POST["rowId-$i"];
//    $tmpCheckpoint = $_POST["tmpUpcomingCheckpoint-$i"];
//    $tmpDate = $_POST["tmpUpcomingDate-$i"];
//    $tmpPrice = $_POST["tmpUpcomingPrice-$i"];
//    $tmpLink = $_POST["tmpUpcomingLink-$i"];
//
//    $db_query = "
//        UPDATE tmpUpcoming
//        SET tmpCheckpoint = '$tmpCheckpoint',
//            tmpDate = '$tmpDate',
//            tmpPrice = '$tmpPrice',
//            tmpLink = '$tmpLink'
//        WHERE id='$id'
//    ";
//    $db_result = mysql_query($db_query, $db_connect);
//
//    $file_name = "tmpUpcomingImgSrc-" . $i;
//    if ($_FILES[$file_name]['name'] != ""){
//        $tmpUpcomingImgSrc = unique_upload_one_img_without_zero($file_name);
//        $db_query = "UPDATE tmpUpcoming SET tmpImgSrc = '$tmpUpcomingImgSrc'  WHERE  id='$id'";
//        $db_result = mysql_query($db_query, $db_connect);
//    }
//}


//
//// UPDATE CALENDAR DATA IN TEMP PAGE
//$generalId = $_POST['generalId'];
//$tmpCalendarTitle = $_POST['tmpCalendarTitle'];
//$tmpCalendarLink = $_POST['tmpCalendarLink'];
//
//$db_query = "
//        UPDATE tmpUpcomingCalendar
//        SET tmpCalendarTitle = '$tmpCalendarTitle',
//            tmpCalendarLink = '$tmpCalendarLink'
//        WHERE  generalId='$generalId'
//";
//$db_result = mysql_query($db_query, $db_connect);
//
////upload img if not empty
//$tmpCalendarBgImgPath = "";
//if ($_FILES['tmpCalendarBgImg']['name'] != ""){
//    $tmpCalendarBgImgPath = unique_upload_one_img_without_zero('tmpCalendarBgImg');
//    $db_query = "UPDATE tmpUpcomingCalendar SET tmpCalendarBgImg = '$tmpCalendarBgImgPath'  WHERE  generalId='$generalId'";
//    $db_result = mysql_query($db_query, $db_connect);
//}
?>


