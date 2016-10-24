<?php include_once "inc/db.php";?>
<?php include_once "inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexFooter WHERE id=1");
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
        Index - Videos
      </h1>
    </section>
    <section class="content index-upcomingEvents">
      <!-- form start -->
      <form class="index-header-form" role="form" action="formAction/index-footer-action.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Sotial links</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">viber</label>
                  <input type="text" name="indexFooterSotialViber" class="form-control" id="" value="<?php echo $db_arr['indexFooterSotialViber'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">skype</label>
                  <input type="text" name="indexFooterSotialSkype" class="form-control" id="" value="<?php echo $db_arr['indexFooterSotialSkype'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">email</label>
                  <input type="text" name="indexFooterSotialEmail" class="form-control" id="" value="<?php echo $db_arr['indexFooterSotialEmail'];?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Center block</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Footer logo</label>
                  <?php if($db_arr['indexFooterLogoLink'] != ""):?>
                    <div class="form-group-img">
                      <input type="hidden" name="tableName" value="indexFooter">
                      <input type="hidden" name="columnName" value="indexFooterLogoLink">
                      <input type="hidden" name="imgCount" value="one">
                      <input type="hidden" name="id" value="1">
                      <img src="../<?php echo $db_arr['indexFooterLogoLink'];?>" alt="">
                      <button type="button" class="del-img btn btn-danger">Удалить</button>
                    </div>
                  <?php endif;?>
                  <div class="upload-img">
                    <input type="file" id="exampleInputFile" name="indexFooterLogoLink">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Background image</label>
                  <?php if($db_arr['indexFooterBgImg'] != ""):?>
                    <div class="form-group-img">
                      <input type="hidden" name="tableName" value="indexFooter">
                      <input type="hidden" name="columnName" value="indexFooterBgImg">
                      <input type="hidden" name="imgCount" value="one">
                      <input type="hidden" name="id" value="1">
                      <img src="../<?php echo $db_arr['indexFooterBgImg'];?>" alt="">
                      <button type="button" class="del-img btn btn-danger">Удалить</button>
                    </div>
                  <?php endif;?>
                  <div class="upload-img">
                    <input type="file" id="exampleInputFile" name="indexFooterBgImg">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Text button</label>
                  <input type="text" name="indexFooterButtonText" class="form-control" id="" value="<?php echo $db_arr['indexFooterButtonText'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Sotial facebook</label>
                  <input type="text" name="indexFooterSotialFb" class="form-control" id="" value="<?php echo $db_arr['indexFooterSotialFb'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Sotial instagram</label>
                  <input type="text" name="indexFooterSotialIn" class="form-control" id="" value="<?php echo $db_arr['indexFooterSotialIn'];?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Phones</h3>
              </div>
              <div class="box-body">

                <?php for ($i = 1; $i < 3; $i++):?>
                  <?php
                  $db_query = mysql_query("SELECT * FROM indexFooter WHERE id=++$i");
                  $db_arr = mysql_fetch_array($db_query);
                  ?>
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="indexFooterPhone-<?php echo $i;?>" class="form-control" id="" value="<?php echo $db_arr['indexFooterPhone'];?>">
                  </div>
                <?php endfor; ?>
                
                
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
