<meta charset="utf-8">

<?php include_once "../inc/db.php";?>
<?php include_once "../inc/functions.php";?>
<?php

if ( 0 < $_FILES['file']['error'] ) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else {
    $extension = pathinfo($_FILES['file']['name']);
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
    $fileName = uniqid() . "." . $extension['extension'];
    $uploadfile = $uploaddir . $fileName;
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile); //какой файл загружать и куда
    var_dump($_FILES['file']);
}


?>

  
