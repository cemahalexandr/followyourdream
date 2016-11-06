<?php include_once "inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexAboutComunity WHERE id=1");
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
        Index - About Comunity
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form class="index-header-form" role="form" action="formAction/index-aboutComunity-action.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Text</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Header text</label>
                  <input type="text" name="aboutComunityHeaderText" class="form-control" id="exampleInputFile" value="<?php echo $db_arr['aboutComunityHeaderText'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">About comunity text</label>
                  <input type="text" name="aboutComunitySubHeaderText" class="form-control" id="exampleInputFile" value="<?php echo $db_arr['aboutComunitySubHeaderText'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Yellow text</label>
                  <input type="text" name="aboutComunityImgYellowText-<?php echo $i;?>" class="form-control" id="exampleInputFile" value="<?php echo $db_arr['aboutComunityYellowText'];?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Img block</h3>
              </div>
              <div class="box-body index-our-travel-img">
                <div class="row">
                  <?php for ($i = 1; $i < 5; $i++):?>
                    <?php
                    $db_query = mysql_query("SELECT * FROM indexAboutComunity WHERE id=++$i");
                    $db_arr = mysql_fetch_array($db_query);
                    ?>
                    <div class="col-md-3">
                      <div class="form-group">
                        <?php if($db_arr['aboutComunityImgSrc'] != ""):?>
                          <div class="form-group-img">
                            <input type="hidden" name="tableName" value="indexAboutComunity">
                            <input type="hidden" name="columnName" value="aboutComunityImgSrc">
                            <input type="hidden" name="imgCount" value="one">
                            <input type="hidden" name="id" value="<?php echo $i;?>">
                            <img src="../<?php echo $db_arr['aboutComunityImgSrc'];?>" alt="">
                            <button type="button" class="del-img btn btn-danger">Удалить</button>
                          </div>
                        <?php endif;?>
                        <div class="upload-img">
                          <input type="file" accept="image/*" id="exampleInputFile" name="aboutComunityNewImg[]">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Header</label>
                        <input type="text" name="aboutComunityImgHeader-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['aboutComunityImgHeader'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Sub Header</label>
                        <input type="text" name="aboutComunityImgText-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['aboutComunityImgText'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Yellow text</label>
                        <input type="text" name="aboutComunityImgYellowText-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['aboutComunityImgYellowText'];?>">
                      </div>
                    </div>
                  <?php endfor; ?>
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
