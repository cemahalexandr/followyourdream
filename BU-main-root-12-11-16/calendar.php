<?php include_once "inc/doctype.php"; ?>
<div id="calendar-page">
    <?php include_once "inc/nav.php"; ?>
    <input data-val="true" data-val-number="The field Id must be a number." data-val-required="The Id field is required." id="Tour_Id" name="Tour.Id" type="hidden" value="Шпицберген">
    <div class="calendar-wrapper">

        <?php for ($i = 1; $i < 13; $i++):?>

            <?php
            //данные по базе данных
            $db_table = "followyourdream";
            $db_select = mysql_select_db($db_table);
            $db_query = mysql_query("SELECT * FROM calendar WHERE id=++$i");
            $db_arr = mysql_fetch_array($db_query);
            ?>
            <?php if($db_arr['calendarBgImg'] != ""):?>
        <div class="calendar-item jan" style="background-image: url('<?php echo $db_arr['calendarBgImg']; ?>');">
            <?php else: ?>
                <div class="calendar-item jan">
            <?php endif;?>

                <div class="calendar-item__month"><?php echo $db_arr['calendarNameMonth'];?></div>
                <div class="calendar-item__tours">
                    <?php
                    //данные по базе данных
                    $db_table = "followyourdream";
                    $db_select = mysql_select_db($db_table);
                    $db_query = mysql_query("SELECT * FROM modalData");
                    $db_row_number = mysql_num_rows($db_query);
                    ?>

                    <ul>
                        <?php while($db_arr = mysql_fetch_assoc($db_query)):?>
                        <?
                            $month_number = array(
                                'jan' => 1,
                                'feb' => 2,
                                'mar' => 3,
                                'apr' => 4,
                                'may' => 5,
                                'jun' => 6,
                                'jul' => 7,
                                'aug' => 8,
                                'sep' => 9,
                                'oct' => 10,
                                'nov' => 11,
                                'dec' => 12
                            );
                            $row_month = 0;
                            foreach ($month_number as $key => $value){
                                if ($db_arr['generalMonth'] == $key){
                                    $row_month = $value;
                                }
                            }

                            ?>
                            
                            <?php if ($row_month == $i):?>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#<?php echo $db_arr['generalId'];?>"><?php echo $db_arr['header'];?></a>
                                </li>
                            <?php endif;?>
                            <?
//                            echo $i;
                        ?>
                        
                        <?php endwhile; ?>
                    </ul>




                </div>
                <div class="calendar-item__overlay"></div>
                <div class="calendar-item__bg-img"></div>
            </div>
        <?php endfor; ?>

        <div class="clearfix"></div>
    </div>
    <?php include_once "inc/modal-calendar.php"; ?>
    <?php include_once "inc/modal-index.php"; ?>
</div>
</div>




<!-- Modal -->



<?php include_once "inc/scripts.php"; ?>
</body>
</html>
