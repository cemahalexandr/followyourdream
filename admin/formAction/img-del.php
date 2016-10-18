<?php include_once "../inc/db.php";?>
<?php
$db_table = "followyourdream";
$imgSrc = $_POST['imgSrc'];
$tableName = $_POST['tableName'];
$columnName = $_POST['columnName'];
$imgCount = $_POST['imgCount'];
$id = $_POST['id'];

// убрать и поставить закоментированнное когда утвердят все картинки
if (substr($imgSrc, 4, 8) != "uploads/"){
    return 0;
} else {
    if ($imgCount == 'one'){
        unlink($_SERVER['DOCUMENT_ROOT'] . "/" . $imgSrc);
        $db_select = mysql_select_db($db_table);
        $db_query = mysql_query("UPDATE $tableName SET $columnName='' WHERE id=$id");
        echo $db_query;
    } else if ($imgCount == 'many'){
        $db_select = mysql_select_db($db_table);
        $db_query = mysql_query("SELECT $columnName FROM $tableName WHERE id=$id");
        $db_arr = mysql_fetch_array($db_query);
        $string_to_arr = explode(",", $db_arr[$columnName]);

        for($i = 0; $i < count($string_to_arr); $i++){
            if ($imgSrc == $string_to_arr[$i]){
                unset($string_to_arr[$i]);
            }
        }
//        unlink($_SERVER['DOCUMENT_ROOT'] . "/" . $imgSrc);
        $arr_to_string = implode(",", $string_to_arr);
//        $db_update = "UPDATE " . $tableName . " SET " . $columnName . "='" . $arr_to_string . "' WHERE id=1";
//        $db_query = mysql_query($db_update);
        echo $arr_to_string;
    }
//    unlink($_SERVER['DOCUMENT_ROOT'] . "/" . $imgSrc);
//    $db_table = "followyourdream";
//    $db_select = mysql_select_db($db_table);
//    $db_query = mysql_query("UPDATE indexHeader SET headerLogoLink='' WHERE id=1");
//    echo $db_query;
}

?>