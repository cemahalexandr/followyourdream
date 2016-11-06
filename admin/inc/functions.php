<?php

//функция загрузки файлов. Если файл один - значение $index = -1
function uploadFile($file, $index = -1){
    if ($index == -1){
        $extension = pathinfo($_FILES[$file]['name']); // массив с информацией про файл
    } else {
        $extension = pathinfo($_FILES[$file]['name'][$index]); // массив с информацией про файл
    }
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/"; //куда загружаем
    $fileName = uniqid() . "." . $extension['extension']; //даём рандомное имя файлу
    $uploadfile = $uploaddir . $fileName; //директория загрузки с названием файла
    if ($index == -1){
        move_uploaded_file($_FILES[$file]['tmp_name'], $uploadfile); //какой файл загружать и куда
    } else {
        move_uploaded_file($_FILES[$file]['tmp_name'][$index], $uploadfile); //какой файл загружать и куда
    }
    $pos = strpos($uploadfile, "img");
    $uploadfile = substr($uploadfile, $pos);
    return $uploadfile;
}


// Для загрузки нескольких файлов
function loopUploadManyFiles($uploadVar, $filesNameSpace) {
    $carouselItemLink = '';
    for ($i = 0; $i < count($uploadVar['name']); $i++){
        if ($uploadVar['name'][$i] == ''){
            continue;
        } else {
            $carouselItemLink .= uploadFile($filesNameSpace, $i) . ',';
        }
    }
    return $carouselItemLink;
}
function unique_upload_many_img($upload_file_name){
    
}
function unique_upload_one_img($upload_file_name){
    $upload_file = $_FILES[$upload_file_name];
        if ($upload_file['name'] == '') {
//        continue;
        } else {
            $extension = pathinfo($_FILES[$upload_file_name]['name'][0]);
            $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/img/uploads/";
            $fileName = uniqid() . "." . $extension['extension'];
            $uploadfile = $uploaddir . $fileName;
            move_uploaded_file($_FILES[$upload_file_name]['tmp_name'][0], $uploadfile); //какой файл загружать и куда
            $pos = strpos($uploadfile, "img");
            $uploadfile = substr($uploadfile, $pos);
            return $uploadfile;
        }
}
?>