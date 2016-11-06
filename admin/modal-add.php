<?php include_once "inc/db.php"; ?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);

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
        Modal add
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
            <form class="index-header-form" role="form" action="formAction/modal-add-action.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="idRow" value="">
                </div>
                <div class="form-group">
                  <label for="">General ID</label>
                  <input type="text" name="generalId" class="form-control" id="" placeholder="tay" value="">
                </div>
                <div class="form-group">
                  <label>Месяц</label>
                  <input type="hidden" name="generalMonth" id="modalMonth" value="">
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
                  <div class="upload-img">
                    <input type="file" accept="image/*" id="exampleInputFile" name="modalHeaderBgImg[]">
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Заголовок</label>
                  <input type="text" name="header" class="form-control" id="" placeholder="Тай + Камбоджа" value="">
                </div>
                <div class="form-group">
                  <label for="">Подпись под заголовком</label>
                  <input type="text" name="subHeader" class="form-control" id="" placeholder="Дальше только СЕВЕРНЫЙ ПОЛЮС!" value="">
                </div>
                <div class="form-group">
                  <label for="">Сроки</label>
                  <input type="text" name="infoDate" class="form-control" id="" placeholder="05 - 11 ИЮНЯ 2017" value="">
                </div>
                <div class="form-group">
                  <label for="">Важно</label>
                  <input type="text" name="infoImportant" class="form-control" id="" placeholder="Размер группы до 30 человек. Осталось 4 места." value="">
                </div>
                <div class="form-group">
                  <label for="">Стоимость</label>
                  <input type="text" name="infoPrice" class="form-control" id="" placeholder="2090 евро/чел (включая все трансферы..." value="">
                </div>
                <div class="form-group">
                  <label>Список</label>
                                    <textarea name="listMain" class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">
                                    </textarea>
                </div>
                <div class="form-group">
                  <label>Текст перед формой</label>
                                    <textarea name="textOverForm"  class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">

                                    </textarea>
                </div>
                <div class="form-group">
                  <label>Текст после формой</label>
                                    <textarea name="textUnderForm" class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">

                                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Как присоединиться</label>
                                    <textarea name="howJoin" class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">

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
                        <div class="upload-img">
                          <input type="file" accept="image/*" id="" name="organizator_img_<?php echo $count;?>[]">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="">Имя и фамилия</label>
                        <input name="organizator_name_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="">Должность</label>
                        <input name="organizator_position_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="">Facebook</label>
                        <input name="organizator_fb_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="">Skype</label>
                        <input name="organizator_skype_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="">Email</label>
                        <input name="organizator_email_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="">Phone</label>
                        <input name="organizator_phone_<?php echo $count;?>" type="text" class="form-control" id="" placeholder="" value="">
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
