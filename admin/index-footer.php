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
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Sotial links</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">viber</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="followyourdream">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">skype</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="followyourdream">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">email</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="info@dreamlifeexpeditions.com">
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
                  <div class="form-group-img">
                    <img src="../img/logo-header.png" alt="">
                    <button type="button" class="del-img btn btn-danger">Удалить</button>
                  </div>
                  <div class="upload-img">
                    <input type="file" id="exampleInputFile">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Background image</label>
                  <div class="form-group-img">
                    <img src="../img/footer__bg.jpg" alt="">
                    <button type="button" class="del-img btn btn-danger">Удалить</button>
                  </div>
                  <div class="upload-img">
                    <input type="file" id="exampleInputFile">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Text button</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="присоединиться к сообществу">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Sotial facebook</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="https://www.facebook.com/FollowYourDREAM2015">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Sotial instagram</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="https://www.instagram.com/follow_your_dream_kiev">
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
                <div class="form-group">
                  <label for="exampleInputFile">Phone 1</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="+380 67 850 21 07">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Phone 2</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="+380 44 360 53 28">
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
