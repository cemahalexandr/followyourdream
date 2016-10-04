<?php include_once "inc/db.php";?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FollowYourDream Admin</title>
  <?php include_once "inc/links-admin-lte.php";?>
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
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
        Navigation
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Навигация</h3>
            </div>
            <form role="form">
              <div class="box-body">
                <?php
                $str = file_get_contents('inc/json/nav.json');
                $json = json_decode($str, true); // decode the JSON into an associative array
                foreach ($json as $json_key => $json_val){
                  echo "<div class='form-group'>";
                  echo "<label for='exampleInputPassword1'>$json_val[title]</label>";
                  echo "<input type='text' class='form-control' id='$json_val[id]' value='$json_val[title]'>";
                  echo "<input type='text' class='form-control' id='' value='$json_val[href]'>";
                  if ($json_val['class'] == "dropdown"){
                    foreach ($json_val['dropdown'] as $drop_key => $drop_val){
                      echo "<div class='form-group_sub'>";
                      echo "<input type='text' class='form-control' id='' value='$drop_val[anchor]'>";
                      echo "<input type='text' class='form-control' id='' value='$drop_val[href]'>";
                      echo "</div>";
                    }
                  }
                  echo "</div>";

                }
                ?>
<!--                <div class='form-group'>-->
<!--                  <label for='exampleInputPassword1'>Путешествия</label>-->
<!--                  <input type='text' class='form-control' id='' value='Путешествия'>-->
<!--                  <input type='text' class='form-control' id='' value='index.php#travel'>-->
<!--                  <div class='form-group_sub'>-->
<!--                    <input type='text' class='form-control' id='' value='Anchor'>-->
<!--                    <input type='text' class='form-control' id='' value='href'>-->
<!--                  </div>-->
<!--                  <div class='form-group_sub'>-->
<!--                    <input type='text' class='form-control' id='' value='Anchor'>-->
<!--                    <input type='text' class='form-control' id='' value='href'>-->
<!--                  </div>-->
<!--                </div>-->
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
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
