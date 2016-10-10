<?php include_once "../inc/db.php";?>
<?php
$imgSrc = $_POST['imgSrc'];


// убрать и поставить закоментированнное когда утвердят все картинки
if (substr($imgSrc, 4, 8) != "uploads/"){
//    echo substr($imgSrc, 4, 8);
    return 0;
//    echo "link";
}
else {
    unlink($_SERVER['DOCUMENT_ROOT'] . "/" . $imgSrc);
    $db_table = "followyourdream";
    $db_select = mysql_select_db($db_table);

    $db_query = mysql_query("DELETE headerLogoLink FROM indexHeader WHERE id=1");
}

?>