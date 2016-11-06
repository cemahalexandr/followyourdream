<?php include_once "inc/db.php"; ?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);

$id_from_get = $_GET['id'];
//var_dump($id_from_get);
//die;

$db_query = mysql_query("SELECT * FROM modalData WHERE id='$id_from_get'");
$db_arr = mysql_fetch_array($db_query);

$id_row = $db_arr['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FollowYourDream Admin</title>
    <?php include_once "inc/links-admin-lte.php"; ?>
    <script src="plugins/tinymce/tinymce.min.js"></script>
    <script>


        tinymce.init({
            selector: '.tinymce',
            images_upload_url: 'formAction/tinymceImgUpload.php',
            images_upload_base_path: '../img/',
            content_css: 'inc/css/tiny.css',
            menubar: false,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            relative_urls: false
        });

        tinymce.init({
            selector: '.modal-list',
            content_css: 'inc/css/tiny.css',
            menubar: false,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: " styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            relative_urls: false
        });

    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include_once "/inc/header.php"; ?>
    <?php include_once "/inc/sidebar.php"; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Modal edit
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Основные данные по модальному окну</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="index-header-form" role="form" action="formAction/modal-edit-action.php" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="hidden" name="idRow" value="<?php echo $db_arr['id'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="">General ID</label>
                                    <input type="text" name="generalId" class="form-control" id="" placeholder="tay" value="<?php echo $db_arr['generalId'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Месяц</label>
                                    <input type="hidden" name="generalMonth" id="modalMonth" value="<?php echo $db_arr['generalMonth'];?>">
                                    <select class="form-control modalMonth">
                                        <option>Январь</option>
                                        <option>Февраль</option>
                                        <option>Март</option>
                                        <option>Апрель</option>
                                        <option>Май</option>
                                        <option>Июнь</option>
                                        <option>Июль</option>
                                        <option>Август</option>
                                        <option>Сентябрь</option>
                                        <option>Октябрь</option>
                                        <option>Ноябрь</option>
                                        <option>Декабрь</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Фоновое изображение</label>
                                    <?php if($db_arr['bgImg'] != ""):?>
                                        <div class="form-group-img">
                                            <input type="hidden" name="modalHeaderBgImgCurrent" value="<?php echo $db_arr['bgImg'];?>">
                                            <input type="hidden" name="tableName" value="modalData">
                                            <input type="hidden" name="columnName" value="bgImg">
                                            <input type="hidden" name="imgCount" value="one">
                                            <input type="hidden" name="id" value="<?php echo $id_row;?>">
                                            <img src="../<?php echo $db_arr['bgImg'];?>" alt="">
                                            <button type="button" class="del-img btn btn-danger">Удалить</button>
                                        </div>
                                    <?php endif;?>
                                    <div class="upload-img">
                                        <input type="file" accept="image/*" id="exampleInputFile" name="modalHeaderBgImg[]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Заголовок</label>
                                    <input type="text" name="header" class="form-control" id="" placeholder="Тай + Камбоджа" value="<?php echo $db_arr['header'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Подпись под заголовком</label>
                                    <input type="text" name="subHeader" class="form-control" id="" placeholder="Дальше только СЕВЕРНЫЙ ПОЛЮС!" value="<?php echo $db_arr['subHeader'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Сроки</label>
                                    <input type="text" name="infoDate" class="form-control" id="" placeholder="05 - 11 ИЮНЯ 2017" value="<?php echo $db_arr['infoDate'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Важно</label>
                                    <input type="text" name="infoImportant" class="form-control" id="" placeholder="Размер группы до 30 человек. Осталось 4 места." value="<?php echo $db_arr['infoImportant'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Стоимость</label>
                                    <input type="text" name="infoPrice" class="form-control" id="" placeholder="2090 евро/чел (включая все трансферы..." value="<?php echo $db_arr['infoPrice'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Список</label>
                                    <textarea name="listMain" class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">
                                        <?php echo $db_arr['listMain'];?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Текст перед формой</label>
                                    <textarea name="textOverForm"  class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">
                                        <?php echo $db_arr['textOverForm'];?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Текст после формой</label>
                                    <textarea name="textUnderForm" class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">
                                        <?php echo $db_arr['textUnderForm'];?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Как присоединиться</label>
                                    <textarea name="howJoin" class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">
                                        <?php echo $db_arr['howJoin'];?>
                                    </textarea>
                                </div>
                                <div class="row">
                                    <?php for($count = 1; $count <=2; $count++):?>
                                    <div class="col-md-6">
                                        <?php
                                        $column_name = 'org' . $count;
                                        $organizator = $db_arr[$column_name];
                                        $organizator = explode("|", $organizator);
                                        ?>
                                        <div class="form-group">
                                            <label for="">Организатор <?php echo $count;?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Изображение организатора</label>
                                            <?php if(true):?>
                                                <div class="form-group-img">
                                                    <input type="hidden" name="currentImgSrc_<?php echo $count;?>" value="<?php echo $organizator[0];?>">
                                                    <input type="hidden" name="tableName" value="modalData">
                                                    <input type="hidden" name="columnName" value="org<?php echo $count;?>">
                                                    <input type="hidden" name="imgCount" value="one">
                                                    <input type="hidden" name="id" value="<?php echo $id_row;?>">
                                                    <img src="../<?php echo $organizator[0];?>" alt="">
                                                    <button type="button" class="del-img btn btn-danger">Удалить</button>
                                                </div>
                                            <?php endif;?>
                                            <div class="upload-img">
                                                <input type="file" accept="image/*" id="" name="organizator_img_<?php echo $count;?>[]">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Имя и фамилия</label>
                                            <input name="organizator_name_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="<?php echo $organizator[1];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Должность</label>
                                            <input name="organizator_position_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="<?php echo $organizator[2];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Facebook</label>
                                            <input name="organizator_fb_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="<?php echo $organizator[3];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Skype</label>
                                            <input name="organizator_skype_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="<?php echo $organizator[4];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input name="organizator_email_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="<?php echo $organizator[5];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input name="organizator_phone_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="<?php echo $organizator[6];?>">
                                        </div>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div id="replaceImgSrc" style="display: none;"></div>
                        </form>
                    </div>
                    <!-- / form -->
                </div>
            </div>


        </section>


    </div>



</div>
<!-- /.content-wrapper -->


<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<?php include_once "inc/scripts-admin-lte.php"; ?>
</body>
</html>
