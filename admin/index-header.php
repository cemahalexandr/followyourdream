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
        Index - header
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form action="formAction/index-header-action.php" method="post" class="index-header-form" role="form">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Logo and sotial links</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <div class="form-group-img">
                    <input type="hidden" name="headerLogoLink">
                    <img class="image-to-input" src="../img/logo-header.png" alt="">
                    <button type="button" class="del-img btn btn-danger">Удалить</button>
                  </div>
                  <div class="upload-img">
                    <label for="exampleInputFile">Logo</label>
                    <input type="file" id="exampleInputFile">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Link fb</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="vk.com/">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Link instagram</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="Instapram">
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
                  <input type="text" class="form-control" id="exampleInputPassword1" value="Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Index - description (meta)</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="Desctiption">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Small text</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="Instapram">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Button text</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="Присоединяйся">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Carousel images</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group-img">
                        <img src="../img/header-img-1.jpg" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group-img">
                        <img src="../img/header-img-2.jpg" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group-img">
                        <img src="../img/our-travel__img-1.jpg" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="file" id="exampleInputFile">
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
