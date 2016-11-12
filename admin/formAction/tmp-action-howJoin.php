<?

$tmpJoinLeftHeader = $_POST['tmpJoinLeftHeader'];
$tmpJoinLeftText = $_POST['tmpJoinLeftText'];
$tmpJoinLeftImgSrc = "";
$tmpJoinRightHeader = $_POST['tmpJoinRightHeader'];
$tmpJoinRightText = $_POST['tmpJoinRightText'];
$tmpJoinRightImgSrc = "";

// загружаем картинки по очереди
if ($_FILES['tmpJoinLeftImgSrc']['name'] != ""){
    $tmpJoinLeftImgSrc = unique_upload_one_img_without_zero('tmpJoinLeftImgSrc');
    $db_query = "UPDATE tmpHowJoin SET tmpJoinLeftImgSrc = '$tmpJoinLeftImgSrc'  WHERE tmpGeneralId='$generalId'";
    $db_result = mysql_query($db_query, $db_connect);
}
if ($_FILES['tmpJoinRightImgSrc']['name'] != ""){
    $tmpJoinRightImgSrc = unique_upload_one_img_without_zero('tmpJoinRightImgSrc');
    $db_query = "UPDATE tmpHowJoin SET tmpJoinRightImgSrc = '$tmpJoinRightImgSrc'  WHERE tmpGeneralId='$generalId'";
    $db_result = mysql_query($db_query, $db_connect);
}


$db_query = "
  UPDATE tmpHowJoin
  SET tmpJoinLeftHeader = '$tmpJoinLeftHeader',
      tmpJoinLeftText = '$tmpJoinLeftText',
      tmpJoinRightHeader = '$tmpJoinRightHeader',
      tmpJoinRightText = '$tmpJoinRightText'
  WHERE tmpGeneralId='$generalId'
";
$db_result = mysql_query($db_query, $db_connect);

?>