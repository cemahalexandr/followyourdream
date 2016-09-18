<?php
$key = $_POST['key'];
$data = array(
    'promo' => array(
        'title' => "Промо-акции",
        'desc' => 'Описание промо-акций'
    ),
    'exclusive' => array(
        'title' => "Эксклюзивный товар",
        'desc' => 'Описание бизнесса'
    )
);

echo json_encode($data[$key]);
?>



