<?php
$imgSrc = $_POST['imgSrc'];
unlink($_SERVER['DOCUMENT_ROOT'] . "/" . $imgSrc);

//echo $imgSrc;
//unlink();
//__DIR__;
//echo $_SERVER['DOCUMENT_ROOT'];
?>