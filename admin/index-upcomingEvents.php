<?php include_once "inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexUpcomingEvents WHERE id=1");
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
        Index - Upcoming Events
      </h1>
    </section>
    <section class="content index-upcomingEvents">
      <!-- form start -->
      <form class="index-header-form" role="form" action="formAction/index-upcomingEvents-action.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="row">
                <div class="col-md-4">
                  <div class="box-header with-border">
                    <h3 class="box-title">Main block</h3>
                  </div>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputFile">Header text</label>
                      <input type="text" class="form-control" name="upcomingEventsHeaderText" id="" value="<?php echo $db_arr['upcomingEventsHeaderText'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Text under button</label>
                      <input type="text" class="form-control" name="upcomingEventsTextButton" id="" value="<?php echo $db_arr['upcomingEventsTextButton'];?>">
                    </div>
                  </div>
                </div>

                <div class="col-md-12 img-block">
                  <div class="box-header with-border">
                    <h3 class="box-title">Img block</h3>
                  </div>
                  <div class="box-body index-our-travel-img">
                    <div class="row colHeight">

                      <?php for ($i = 1; $i < 7; $i++):?>
                        <?php
                        $db_query = mysql_query("SELECT * FROM indexUpcomingEvents WHERE id=++$i");
                        $db_arr = mysql_fetch_array($db_query);
                        ?>
                        <div class="col-md-4">
                          <div class="form-group">
                            <?php if($db_arr['upcomingEventsBlockImgSrc'] != ""):?>
                              <div class="form-group-img">
                                <input type="hidden" name="tableName" value="indexUpcomingEvents">
                                <input type="hidden" name="columnName" value="upcomingEventsBlockImgSrc">
                                <input type="hidden" name="imgCount" value="one">
                                <input type="hidden" name="id" value="<?php echo $i;?>">
                                <img src="../<?php echo $db_arr['upcomingEventsBlockImgSrc'];?>" alt="">
                                <button type="button" class="del-img btn btn-danger">Удалить</button>
                              </div>
                            <?php endif;?>
                            <div class="upload-img">
                              <input type="file" accept="image/*" id="exampleInputFile" name="upcomingEventsBlockImgArr[]">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Checkpoint</label>
                            <input type="text" name="upcomingEventsBlockImgCheckpoint-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['upcomingEventsBlockImgCheckpoint'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Date</label>
                            <input type="text" name="upcomingEventsBlockImgDate-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['upcomingEventsBlockImgDate'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="text" name="upcomingEventsBlockImgPrice-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['upcomingEventsBlockImgPrice'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Link</label>
                            <input type="text" name="upcomingEventsBlockImgLink-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['upcomingEventsBlockImgLink'];?>">
                          </div>
                        </div>

                      <?php endfor; ?>
                    </div>
                  </div>
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
