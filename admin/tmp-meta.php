<?php
//данные по базе данных
$db_table = "followyourdream";
$db_select = mysql_select_db($db_table);
$db_query = mysql_query("SELECT * FROM tmpHeader WHERE tmpGeneralId = '$generalId'");
$db_arr = mysql_fetch_array($db_query);
?>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Meta</h3>
  </div>
  <div class="box-body">
    <div class="form-group">
      <label for="">Meta title</label>
      <input name="tmpMetaTitle" type="text" class="form-control" id="" value="<?php echo $db_arr['tmpMetaTitle'];?>">
    </div>
    <div class="form-group">
      <label for="">Meta description</label>
      <input name="tmpMetaDescription" type="text" class="form-control" id="" value="<?php echo $db_arr['tmpMetaDescription'];?>">
    </div>
  </div>
</div>