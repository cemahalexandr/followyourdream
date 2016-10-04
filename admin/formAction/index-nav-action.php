<meta charset="utf-8">
<?php
$jsonString = file_get_contents('../inc/json/nav.json');
$dataJSON = json_decode($jsonString, true);

foreach ($dataJSON as $json_key => $json_val){
  // установка идентификаторов
  $main_title = $dataJSON[$json_key]['key'];
  $main_href = $dataJSON[$json_key]['key'] . "-href";

  // получаем данные с формы
  $dataPOST_title = $_POST[$main_title];
  $dataPOST_href = $_POST[$main_href];

  //запись данных
  $dataJSON[$json_key]['title'] = $dataPOST_title;
  $dataJSON[$json_key]['href'] = $dataPOST_href;

  if ($json_val['class'] == 'dropdown'){
    foreach ($json_val['dropdown'] as $drop_key => $drop_val){

      // установка идентификаторов
      $drop_title = $json_val['dropdown'][$drop_key]['key'];
      $drop_href = $json_val['dropdown'][$drop_key]['key'] . "-href";

      // получаем данные с формы
      $dataPOST_drop_title = $_POST[$drop_title];
      $dataPOST_drop_href = $_POST[$drop_href];

      $dataJSON[$json_key]['dropdown'][$drop_key]['anchor'] = $dataPOST_drop_title;
      $dataJSON[$json_key]['dropdown'][$drop_key]['href'] = $dataPOST_drop_href;

//      //запись данных
//      $json_val['dropdown'][$drop_key]['anchor'] = $dataPOST_drop_title;
//      $json_val['dropdown'][$drop_key]['href'] = $dataPOST_drop_href;
    }
  }
}
$newJsonString = json_encode($dataJSON);
file_put_contents('../inc/json/nav.json', $newJsonString);

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




