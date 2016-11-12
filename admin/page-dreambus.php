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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Страница приключений
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form class="index-header-form" role="form" action="formAction/tmp-action.php" method="post" enctype="multipart/form-data">
        <?
        $generalId = "dreambus";
        ?>
        <input type="hidden" name="generalId" value="dreambus">
        <div class="row">
          <div class="col-md-3">
            <?php include_once "tmp-header.php";?>
          </div>
          <div class="col-md-3">
            <?php include_once "tmp-meta.php";?>
          </div>
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Main text</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <?php include_once "tmp-content.php";?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <?php include_once "tmp-howJoin.php";?>
          </div>
          <div class="col-md-12">
            <?php include_once "tmp-upcoming.php";?>
          </div>
          <div class="col-md-12">
            <?php include_once "tmp-carousel.php";?>
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
