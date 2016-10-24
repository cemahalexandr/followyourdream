<?php include_once "inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexWithUs WHERE id=1");
$db_arr = mysql_fetch_array($db_query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FollowYourDream Admin</title>
  <?php include_once "inc/links-admin-lte.php";?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once "inc/header.php";?>
  <?php include_once "inc/sidebar.php";?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Index - with us you are waiting for
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form class="index-header-form" role="form" action="formAction/index-withUs-action.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Main-text</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Header text</label>
                  <input type="text" class="form-control" id="" name="withUsHeaderText" value="<?php echo $db_arr['withUsHeaderText'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Background Image</label>
                  <?php if($db_arr['withUsBgImg'] != ""):?>
                    <div class="form-group-img">
                      <input type="hidden" name="tableName" value="indexWithUs">
                      <input type="hidden" name="columnName" value="withUsBgImg">
                      <input type="hidden" name="imgCount" value="one">
                      <input type="hidden" name="id" value="1">
                      <img src="../<?php echo $db_arr['withUsBgImg'];?>" alt="">
                      <button type="button" class="del-img btn btn-danger">Удалить</button>
                    </div>
                  <?php endif;?>
                  <div class="upload-img">
                    <input type="file" accept="image/*" id="exampleInputFile" name="withUsNewImg">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                  <textarea name="withUsTextarea" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: block;" placeholder="Place some text here">
                    <?php echo $db_arr['withUsTextarea'];?>
                  </textarea>
                <input type="hidden" name="_wysihtml5_mode" value="1">
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Text under list</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Text</label>
                  <input type="text" class="form-control" name="withUsUnderText" id="" value="<?php echo $db_arr['withUsUnderText'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Text button</label>
                  <input type="text" class="form-control" name="withUsUnderTextButton" id="" value="<?php echo $db_arr['withUsUnderTextButton'];?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- / form -->

    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once "inc/scripts-admin-lte.php";?>
</body>
</html>
