<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);

//$headerLogoLink = $_FILES['headerLogoLink'];
//var_dump($headerLogoLink);
//die();

//функция загрузки файлов
function uploadFile($file){
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/"; //куда загружаем
    $extension = pathinfo($_FILES[$file]['name']); // массив с информацией про файл
    $fileName = uniqid() . "." . $extension['extension']; //даём рандомное имя файлу
    $uploadfile = $uploaddir . $fileName; //директория загрузки с названием файла
    move_uploaded_file($_FILES[$file]['tmp_name'], $uploadfile); //какой файл загружать и куда
    $pos = strpos($uploadfile, "img");
    $uploadfile = substr($uploadfile, $pos);
    return $uploadfile;
}

// инифиализация переменных
$headerLinkFb = $_POST['headerLinkFb'];
$headerLinkIn = $_POST['headerLinkIn'];
$headerTitle = $_POST['headerTitle'];
$headerDescription = $_POST['headerDescription'];
$headerSmallText = $_POST['headerSmallText'];
$headerButtonText = $_POST['headerButtonText'];
//files
$headerCarouselSrc = $_POST['headerCarouselSrc'];
$headerLogoLink = $_POST['headerLogoLink'];

if ($_POST['headerLogoLink'] == NULL){
    $headerLogoLink = uploadFile('headerLogoLink');
}

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



  
