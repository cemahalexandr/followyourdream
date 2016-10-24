<?php include_once "inc/db.php";?>
<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM indexReviews WHERE id=1");
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
        Index - Reviews
      </h1>
    </section>
    <section class="content index-upcomingEvents">
      <!-- form start -->
      <form class="index-header-form" role="form" action="formAction/index-reviews-action.php" method="post" enctype="multipart/form-data">
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
                      <input type="text" name="reviewsHeaderText" class="form-control" id="" value="<?php echo $db_arr['reviewsHeaderText'];?>">
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
                        $db_query = mysql_query("SELECT * FROM indexReviews WHERE id=++$i");
                        $db_arr = mysql_fetch_array($db_query);
                        ?>
                        <div class="col-md-4">
                          <div class="form-group">
                            <?php if($db_arr['reviewsImgSrc'] != ""):?>
                              <div class="form-group-img">
                                <input type="hidden" name="tableName" value="indexReviews">
                                <input type="hidden" name="columnName" value="reviewsImgSrc">
                                <input type="hidden" name="imgCount" value="one">
                                <input type="hidden" name="id" value="<?php echo $i;?>">
                                <img src="../<?php echo $db_arr['reviewsImgSrc'];?>" alt="">
                                <button type="button" class="del-img btn btn-danger">Удалить</button>
                              </div>
                            <?php endif;?>
                            <div class="upload-img">
                              <input type="file" accept="image/*" id="" name="reviewsImgArr[]">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="reviewsReviewName-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['reviewsReviewName'];?>">
                          </div>
                          <div class="form-group">
                            <label for="">Text review</label>
                            <input type="text" name="reviewsReviewText-<?php echo $i;?>" class="form-control"  value="<?php echo $db_arr['reviewsReviewText'];?>">
                          </div>
                        </div>
                      <?php endfor; ?>


<!--                      <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                          <div class="form-group-img">-->
<!--                            <img src="../img/review__human-3.png" alt="">-->
<!--                            <button type="button" class="del-img btn btn-danger">Удалить</button>-->
<!--                          </div>-->
<!--                          <div class="upload-img">-->
<!--                            <input type="file" id="exampleInputFile">-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Name</label>-->
<!--                          <input type="text" class="form-control"  value="Вольдемар Яковенко">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Text review</label>-->
<!--                          <input type="text" class="form-control"  value="Анна и Влад, спасибо огромное за путешествие. Все было классно!  Спасибо  всем новым друзьям, с вами было очень здорово)). Давайте не сидеть дома и снова куда-нибудь махнем)!">-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                          <div class="form-group-img">-->
<!--                            <img src="../img/review__human-3.png" alt="">-->
<!--                            <button type="button" class="del-img btn btn-danger">Удалить</button>-->
<!--                          </div>-->
<!--                          <div class="upload-img">-->
<!--                            <input type="file" id="exampleInputFile">-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Name</label>-->
<!--                          <input type="text" class="form-control"  value="Вольдемар Яковенко">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Text review</label>-->
<!--                          <input type="text" class="form-control"  value="Анна и Влад, спасибо огромное за путешествие. Все было классно!  Спасибо  всем новым друзьям, с вами было очень здорово)). Давайте не сидеть дома и снова куда-нибудь махнем)!">-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                          <div class="form-group-img">-->
<!--                            <img src="../img/review__human-3.png" alt="">-->
<!--                            <button type="button" class="del-img btn btn-danger">Удалить</button>-->
<!--                          </div>-->
<!--                          <div class="upload-img">-->
<!--                            <input type="file" id="exampleInputFile">-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Name</label>-->
<!--                          <input type="text" class="form-control"  value="Вольдемар Яковенко">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Text review</label>-->
<!--                          <input type="text" class="form-control"  value="Анна и Влад, спасибо огромное за путешествие. Все было классно!  Спасибо  всем новым друзьям, с вами было очень здорово)). Давайте не сидеть дома и снова куда-нибудь махнем)!">-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                          <div class="form-group-img">-->
<!--                            <img src="../img/review__human-3.png" alt="">-->
<!--                            <button type="button" class="del-img btn btn-danger">Удалить</button>-->
<!--                          </div>-->
<!--                          <div class="upload-img">-->
<!--                            <input type="file" id="exampleInputFile">-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Name</label>-->
<!--                          <input type="text" class="form-control"  value="Вольдемар Яковенко">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Text review</label>-->
<!--                          <input type="text" class="form-control"  value="Анна и Влад, спасибо огромное за путешествие. Все было классно!  Спасибо  всем новым друзьям, с вами было очень здорово)). Давайте не сидеть дома и снова куда-нибудь махнем)!">-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                          <div class="form-group-img">-->
<!--                            <img src="../img/review__human-3.png" alt="">-->
<!--                            <button type="button" class="del-img btn btn-danger">Удалить</button>-->
<!--                          </div>-->
<!--                          <div class="upload-img">-->
<!--                            <input type="file" id="exampleInputFile">-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Name</label>-->
<!--                          <input type="text" class="form-control"  value="Вольдемар Яковенко">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Text review</label>-->
<!--                          <input type="text" class="form-control"  value="Анна и Влад, спасибо огромное за путешествие. Все было классно!  Спасибо  всем новым друзьям, с вами было очень здорово)). Давайте не сидеть дома и снова куда-нибудь махнем)!">-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                          <div class="form-group-img">-->
<!--                            <img src="../img/review__human-3.png" alt="">-->
<!--                            <button type="button" class="del-img btn btn-danger">Удалить</button>-->
<!--                          </div>-->
<!--                          <div class="upload-img">-->
<!--                            <input type="file" id="exampleInputFile">-->
<!--                          </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Name</label>-->
<!--                          <input type="text" class="form-control"  value="Вольдемар Яковенко">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="exampleInputPassword1">Text review</label>-->
<!--                          <input type="text" class="form-control"  value="Анна и Влад, спасибо огромное за путешествие. Все было классно!  Спасибо  всем новым друзьям, с вами было очень здорово)). Давайте не сидеть дома и снова куда-нибудь махнем)!">-->
<!--                        </div>-->
<!--                      </div>-->
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
