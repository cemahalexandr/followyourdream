<?php
/*----------FORMACTION index.php START---------*/
/* Здесь проверяется существование переменных */
$formid = $_POST['form-id'];



function sentIndexForm($file_name){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $date = date("d.m.y"); // число.месяц.год
    $time= date("H:i"); // часы:минуты:секунды
    $tourname = $_POST['tourname'];

    // Сюда впишите свою эл. почту
//    $address = "info@dreamlifeexpeditions.com,cemah.alexandr@gmail.com";
    $address = "elljay@ya.ru";

    // А здесь прописывается текст сообщения, \n - перенос строки 
    $mes = "Метка:" . $tourname . "\nФИО:" . $name . "\nТелефон:" . $phone . "\nЕмеил:" . $mail;
    $sub = "Новая заявка: " . $name . " " . $tourname; //сабж
    /* А эта функция как раз занимается отправкой письма на указанный вами email */
    $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$address");
    
    // Сохраняем в базу данных
    $f = fopen($file_name, "a+");
    fwrite($f,"\n Метка: $tourname\n$date $time\nИмя: $name\nТелефон: $phone\nЕмеил: $mail");
    fwrite($f,"\n ---------------");
    fclose($f);
}
if ($formid == "index-modal-subscribe") {
    sentIndexForm("application_subscribe.txt");
} else if ($formid == "footer-form") {
    sentIndexForm("application_sotial.txt");
}
/*----------FORMACTION index.php END---------*/


?>