<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Module - upcoming event</h3>
  </div>
  <div class="box-body">
    <div class="box-body index-our-travel-img">
      <div class="row">
        <?
        //данные по базе данных
        $db_table = "followyourdream";
        $db_select = mysql_select_db($db_table);
        $db_query = mysql_query("SELECT * FROM tmpUpcoming WHERE tmpGeneralId='$generalId'");
        ?>
        <?php while ($db_arr = mysql_fetch_array($db_query)):?>
          <div class="col-md-3">
            <div class="form-group">
              <?php if($db_arr['tmpImgSrc'] != ""):?>
                <div class="form-group-img">
                  <input type="hidden" name="tableName" value="tmpHeader">
                  <input type="hidden" name="columnName" value="tmpHeaderBgUrl">
                  <input type="hidden" name="imgCount" value="one">
                  <input type="hidden" name="id" value="1">
                  <img src="../<?php echo $db_arr['tmpImgSrc'];?>" alt="">
                  <button type="button" class="del-img btn btn-danger">Удалить</button>
                </div>
              <?php endif;?>
              <div class="upload-img">
                <input type="file" id="exampleInputFile">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Checkpoint</label>
              <input type="text" class="form-control"  value="<?php echo $db_arr['tmpCheckpoint'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Date</label>
              <input type="text" class="form-control"  value="<?php echo $db_arr['tmpDate'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Price</label>
              <input type="text" class="form-control"  value="<?php echo $db_arr['tmpPrice'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Link</label>
              <input type="text" class="form-control"  value="<?php echo $db_arr['tmpLink'];?>">
            </div>
          </div>
        <?php endwhile;?>

        
        <div class="col-md-3">
          <div class="form-group">
            <div class="form-group-img">
              <img src="../img/header-img-3.jpg" alt="">
              <button type="button" class="del-img btn btn-danger">Удалить</button>
            </div>
            <div class="upload-img">
              <input type="file" id="exampleInputFile">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control"  value="Календарь путешествий">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Link</label>
            <input type="text" class="form-control"  value="calendar.php">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>