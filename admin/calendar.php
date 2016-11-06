<?php include_once "inc/db.php";?>
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
        Calendar
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form class="index-header-form" role="form" action="formAction/calendar-action.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Основная информация</h3>
              </div>
              <div class="box-body">
                <div class="row colHeight">
                  <?php for ($i = 1; $i < 13; $i++):?>
                    <?php
                    //данные по базе данных
                    $db_table = "followyourdream";
                    $db_select = mysql_select_db($db_table);
                    $db_query = mysql_query("SELECT * FROM calendar WHERE id=++$i");
                    $db_arr = mysql_fetch_array($db_query);
                    ?>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Название месяца</label>
                        <input type="text" name="calendarNameMonth-<?php echo $i;?>" class="form-control" id="" value="<?php echo $db_arr['calendarNameMonth'];?>">
                      </div>
                      <div class="form-group">
                        <label for="">Фоновое изображение</label>
                        <?php if($db_arr['calendarBgImg'] != ""):?>
                          <div class="form-group-img">
                            <input type="hidden" name="tableName" value="calendar">
                            <input type="hidden" name="columnName" value="calendarBgImg">
                            <input type="hidden" name="imgCount" value="one">
                            <input type="hidden" name="id" value="<?php echo $i;?>">
                            <img src="../<?php echo $db_arr['calendarBgImg'];?>" alt="">
                            <button type="button" class="del-img btn btn-danger">Удалить</button>
                          </div>
                        <?php endif;?>
                        <div class="upload-img">
                          <input type="file" accept="image/*" id="exampleInputFile" name="calendarBgImgArr[]">
                        </div>
                      </div>
                    </div>
                  <?php endfor; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Путешествия</h3>
                <a href="modal-add.php" class="pull-right"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <?php
                //данные по базе данных
                $db_table = "followyourdream";
                $db_select = mysql_select_db($db_table);
                $db_query = mysql_query("SELECT * FROM modalData");
                $db_row_number = mysql_num_rows($db_query);
//                var_dump($db_row_number);
//                die;
                ?>
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th>ID</th>
                      <th>Month</th>
                      <th>Title</th>
                      <th width="100px">Edit/delete</th>
                    </tr>

                    <?php while($db_arr = mysql_fetch_assoc($db_query)):?>
                      <tr>
                        <td><?php echo $db_arr['id'];?></td>
                        <td><?php echo $db_arr['generalMonth'];?></td>
                        <td><?php echo $db_arr['header'];?></td>
                        <td>
                          <a href="modal-edit.php?id=<?php echo $db_arr['id'];?>"><button type="button" class="btn btn-success"><span class="fa fa-edit"></span></button></a>
                          <a href="modal-del.php?id=<?php echo $db_arr['id'];?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
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
