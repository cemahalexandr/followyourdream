
<?php include_once "../inc/db.php";?>
<?php include_once "../inc/functions.php";?>
<?php

$extension = pathinfo($_FILES['travelTextImg']['name']);
//var_dump($extension);
$uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
$fileName = uniqid() . "." . $extension['extension'];
$uploadfile = $uploaddir . $fileName;
//move_uploaded_file($_FILES['travelTextImg']['tmp_name'], $uploadfile); //какой файл загружать и куда
$pos = strpos($uploadfile, "img");
$uploadfile = substr($uploadfile, $pos);
echo $uploadfile;
?>

  
