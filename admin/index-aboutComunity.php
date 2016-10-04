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
        Index - About Comunity
      </h1>
    </section>
    <section class="content">
      <!-- form start -->
      <form class="index-header-form" role="form">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Text</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Header text</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="НАШИ ПУТЕШЕСТВИЯ">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">About comunity text</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="#FOLLOW YOUR DREAM - открытое travel-сообщество для всех, кто влюблен в жизнь, в приключения и путешествия. Мы выбираем самые необыкновенные места планеты, собираем самую веселую компанию и отправляемся в самые крутые путешествия в вашей жизни. Для нас нет границ и возраста. Мы не заставим Вас слушать монотонные экскурсии или скучать на пляже. Все наши путешествия насыщены впечатлениями, яркими эмоциями, незабываемыми приключениями и при этом абсолютно доступны. Жизнь слишком коротка, что бы тратить ее на глупости!">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Yellow text</label>
                  <input type="text" class="form-control" id="exampleInputFile" value="#Живи_так_как_ты_хочешь">
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
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group-img">
                        <img src="../img/about-comunity__icon-1.png" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Header</label>
                      <input type="text" class="form-control"  value="Путешествия">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Text</label>
                      <input type="text" class="form-control"  value="Экспедиции, приключения и яхтенные регаты в самые редкие, необыкновенные и интересные места планеты">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Yellow text</label>
                      <input type="text" class="form-control"  value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group-img">
                        <img src="../img/about-comunity__icon-2.png" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Header</label>
                      <input type="text" class="form-control"  value="Идея">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Text</label>
                      <input type="text" class="form-control"  value="Жизнь ОФИГЕННАЯ штука и она одна! Мечтай, путешествуй, вдохновляйся, действуй и наслаждайся каждым моментом">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Yellow text</label>
                      <input type="text" class="form-control"  value="#Живи_так_как_ты_хочешь">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group-img">
                        <img src="../img/about-comunity__icon-3.png" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Header</label>
                      <input type="text" class="form-control"  value="общение">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Text</label>
                      <input type="text" class="form-control"  value="Искреннее общение и настоящие друзья по всему миру! Нас уже больше 8000 участников! Присоединяйся и наполни свою жизнь приключениями!">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Yellow text</label>
                      <input type="text" class="form-control"  value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="form-group-img">
                        <img src="../img/about-comunity__icon-4.png" alt="">
                        <button type="button" class="del-img btn btn-danger">Удалить</button>
                      </div>
                      <div class="upload-img">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Header</label>
                      <input type="text" class="form-control"  value="Доступность">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Text</label>
                      <input type="text" class="form-control"  value="Мы уверены, что даже самые крутые путешествия не должны стоить дорого! Наши приключения уникальны и при этом абсолютно доступны!">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Yellow text</label>
                      <input type="text" class="form-control"  value="">
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
