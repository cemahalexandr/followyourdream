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
        Index - Videos
      </h1>
    </section>
    <section class="content index-upcomingEvents">
      <!-- form start -->
      <form class="index-header-form" role="form">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Img block</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Header text</label>
                      <input type="text" class="form-control" id="exampleInputFile" value="НАШИ ВИДЕО">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Background image</label>
                      <div class="form-group-img">
                        <img src="../img/video-bg-1.jpg" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Link</label>
                      <input type="text" class="form-control"  value="https://www.youtube.com/watch?v=HVoSC5ubrg4">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Background image</label>
                      <div class="form-group-img">
                        <img src="../img/video-bg-2.jpg" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Link</label>
                      <input type="text" class="form-control"  value="https://www.youtube.com/watch?v=HVoSC5ubrg4">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Background image</label>
                      <div class="form-group-img">
                        <img src="../img/video-bg-3.jpg" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Link</label>
                      <input type="text" class="form-control"  value="https://www.youtube.com/watch?v=HVoSC5ubrg4">
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
