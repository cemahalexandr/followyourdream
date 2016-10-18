<?php include_once "inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);

$db_query = mysql_query("SELECT * FROM indexHeader WHERE id=1");
$db_arr = mysql_fetch_array($db_query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $db_arr['headerTitle'];?></title>
  <meta name="description" content="<?php echo $db_arr['headerDescription'];?>">
  <?php include_once "inc/links-admin-lte.php";?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once "inc/header.php";?>
  <?php include_once "inc/sidebar.php";?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Index - header
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form action="formAction/index-header-action.php" method="post" class="index-header-form form-with-carousel" role="form" enctype="multipart/form-data" >
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Logo and sotial links</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <?php
                  $headerLogoLinkString = $db_arr['headerLogoLink'];
                  if ($headerLogoLinkString != ''):
                  ?>
                  <div class="form-group-img">
                    <input type="hidden" name="headerLogoLink" >
                    <input type="hidden" name="tableName" value="indexHeader">
                    <input type="hidden" name="columnName" value="headerLogoLink">
                    <input type="hidden" name="imgCount" value="one">
                    <input type="hidden" name="id" value="1">
                    <img class="image-to-input" src="../<?php echo $db_arr['headerLogoLink'];?>" alt="">
                    <button type="button" class="del-img btn btn-danger">Удалить</button>
                  </div>
                  <?php
                  endif;
                  ?>
                  <div class="upload-img">
                    <label for="exampleInputFile">Logo</label>
                    <input type="file" accept="image/*" id="" name="headerLogoLink">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Link fb</label>
                  <input type="text" name="headerLinkFb" class="form-control" id="exampleInputEmail1" value="<?php echo $db_arr['headerLinkFb'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Link instagram</label>
                  <input type="text" name="headerLinkIn" class="form-control" id="exampleInputPassword1" value="<?php echo $db_arr['headerLinkIn'];?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Header text</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Index - title</label>
                  <input type="text" name="headerTitle" class="form-control" id="exampleInputPassword1" value="<?php echo $db_arr['headerTitle'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Index - description (meta)</label>
                  <input type="text" name="headerDescription" class="form-control" id="exampleInputPassword1" value="<?php echo $db_arr['headerDescription'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Small text</label>
                  <input type="text" name="headerSmallText" class="form-control" id="exampleInputPassword1" value="<?php echo $db_arr['headerSmallText'];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Button text</label>
                  <input type="text" name="headerButtonText" class="form-control" id="exampleInputPassword1" value="<?php echo $db_arr['headerButtonText'];?>">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box box-primary index-header-image-carousel">
              <input type="hidden" name="headerCarouselSrc" class="form-control" id="" value="">
              <div class="box-header with-border">
                <h3 class="box-title">Header Carousel images</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <?php
                  $carouselString = $db_arr['headerCarouselSrc'];
                  $carouselArr = explode(",", $carouselString);
                  for ($i = 0; $i < count($carouselArr); $i++):?>
                    <div class="col-md-3">
                      <div class="form-group">
                        <?php if($carouselArr[$i] != ""):?>
                        <div class="form-group-img">
                          <input type="hidden" name="tableName" value="indexHeader">
                          <input type="hidden" name="columnName" value="headerCarouselSrc">
                          <input type="hidden" name="imgCount" value="many">
                          <input type="hidden" name="id" value="1">
                          <img src="../<?php echo $carouselArr[$i];?>" alt="">
                          <button type="button" class="del-img btn btn-danger">Удалить</button>
                        </div>
                        <?php endif;?>
                        <div class="upload-img">
                          <input type="file" accept="image/*" id="exampleInputFile" name="headerCarouselNewImg[]">
                        </div>
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
