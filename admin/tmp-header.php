<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM tmpHeader WHERE id='1'");
$db_arr = mysql_fetch_array($db_query);
?>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Header</h3>
  </div>
  <div class="box-body">
    <div class="form-group">
      <label for="">Header text</label>
      <input type="text" class="form-control" name="tmpHeaderText" id="" value="<?php echo $db_arr['tmpHeaderText'];?>">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Sub Header text</label>
      <input type="text" class="form-control" name="tmpSubHeaderText" id="" value="<?php echo $db_arr['tmpSubHeaderText'];?>">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Button text</label>
      <input type="text" class="form-control" name="tmpBtnText" id="" value="<?php echo $db_arr['tmpBtnText'];?>">
    </div>
    <div class="form-group">
      <label for="">Background img</label>
      <?php if($db_arr['tmpHeaderBgUrl'] != ""):?>
        <div class="form-group-img">
          <input type="hidden" name="tableName" value="tmpHeader">
          <input type="hidden" name="columnName" value="tmpHeaderBgUrl">
          <input type="hidden" name="imgCount" value="one">
          <input type="hidden" name="id" value="1">
          <img src="../<?php echo $db_arr['tmpHeaderBgUrl'];?>" alt="">
          <button type="button" class="del-img btn btn-danger">Удалить</button>
        </div>
      <?php endif;?>
      <div class="upload-img">
        <input type="file" accept="image/*" id="exampleInputFile" name="tmpHeaderBgUrl">
      </div>
    </div>
  </div>
</div>