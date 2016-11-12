<?

$tmpHeaderText = $_POST['tmpHeaderText'];
$tmpSubHeaderText = $_POST['tmpSubHeaderText'];
$tmpBtnText = $_POST['tmpBtnText'];
$tmpMetaTitle = $_POST['tmpMetaTitle'];
$tmpMetaDescription = $_POST['tmpMetaDescription'];
$tmpHeaderBgUrl = "";
$tmpContent = $_POST['tmpContent'];


if ($_FILES['tmpHeaderBgUrl']['name'] != ""){
    $tmpHeaderBgUrl = unique_upload_one_img_without_zero('tmpHeaderBgUrl');
    $db_query = "UPDATE tmpHeader SET tmpHeaderBgUrl = '$tmpHeaderBgUrl'  WHERE tmpGeneralId='$generalId'";
    $db_result = mysql_query($db_query, $db_connect);
}


$db_query = "
  UPDATE tmpHeader
  SET tmpHeaderText = '$tmpHeaderText',
      tmpSubHeaderText = '$tmpSubHeaderText',
      tmpBtnText = '$tmpBtnText',
      tmpMetaTitle = '$tmpMetaTitle',
      tmpMetaDescription = '$tmpMetaDescription',
      tmpContent = '$tmpContent'
  WHERE tmpGeneralId='$generalId'
";


$db_result = mysql_query($db_query, $db_connect);

?>
