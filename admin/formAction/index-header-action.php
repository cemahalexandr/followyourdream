<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);




//print_r($_FILES);
$uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
//$extension = pathinfo(basename($_FILES['headerLogoLink']['name']))['extension'];
$extension = pathinfo($_FILES['headerLogoLink']['name']);
$fileName = uniqid() . "." . $extension['extension'];
$uploadfile = $uploaddir . $fileName;
echo $uploadfile;
//die();
move_uploaded_file($_FILES['headerLogoLink']['tmp_name'], $uploadfile);






$headerLogoLink = $_POST['headerLogoLink'];
$headerLinkFb = $_POST['headerLinkFb'];
$headerLinkIn = $_POST['headerLinkIn'];
$headerTitle = $_POST['headerTitle'];
$headerDescription = $_POST['headerDescription'];
$headerSmallText = $_POST['headerSmallText'];
$headerButtonText = $_POST['headerButtonText'];
$headerCarouselSrc = $_POST['headerCarouselSrc'];


$db_query = "
  UPDATE indexHeader
  SET headerLogoLink = '$headerLogoLink',
      headerLinkFb = '$headerLinkFb',
      headerLinkIn = '$headerLinkIn',
      headerTitle = '$headerTitle',
      headerDescription = '$headerDescription',
      headerSmallText = '$headerSmallText',
      headerButtonText = '$headerButtonText',
      headerCarouselSrc = '$headerCarouselSrc'
  WHERE id=1
";

$db_result = mysql_query($db_query, $db_connect);
mysql_close($db_connect);


//// так получаем URL, с которого пришёл посетитель
//$back = $_SERVER['HTTP_REFERER']; // для справки, не обязательно создавать переменную
//
//// Теперь создаём страницу, пересылающую
//// в meta теге на предыдущую
//echo "
//<html>
//<head>
//  <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
//</head>
//</html>";
?>



  
