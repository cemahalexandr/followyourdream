<!--    modal-subscribe start-->
<div id="takePartModal" class="index_modal modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="takePartForm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title takepart_header">Заявка на получение рассылки</h4>
          <p class="takepart_descrip">Оставьте свои контактные данные<br />и мы будем сообщать вам самое <br />интересное в мире путешествий</p>
          <div id="errorMsg" class="alert alert-danger hidden ptsans">Произошла ошибка, попробуйте еще раз</div>
        </div>
        <div class="modal-body">
          <input type="hidden" id="analytic"/>
          <input type="hidden" name="tourname" id="Tour_Id" value="<?php echo $goal;?>" />
          <input type="hidden" name="form-id" value="index-modal-subscribe" />
          <div class="form-group text-align-left">
            <label for="name" class="takepart_input">Ваше имя и фамилия</label>
            <input name="name" class="form-control" id="name" required>
          </div>
          <div class="form-group text-align-left">
            <label for="phone" class="takepart_input">Ваш телефон</label>
            <input type="tel" name="phone" class="form-control" id="phone" required>
          </div>
          <div class="form-group text-align-left">
            <label for="mail" class="takepart_input" >Ваша почта</label>
            <input type="email" name="mail" class="form-control" id="mail" required>
          </div>
        </div>
        <div class="modal-footer">
          <div class="text-center">
            <input type="submit" class="btn_submitform" value="Получать рассылку" />
            <button type="button" class="btn_submitform hidden" data-dismiss="modal" aria-label="Close">Закрыть</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--    modal-subscribe end -->


<!--    modal-sotial start -->
<div id="takePartModalsocial" class="index_modal modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="takePartFormsocial">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title takepart_header" style="color: #3F51B5;">Присоединиться к сообществу</h4>
          <p class="takepart_descrip">Оставьте свои контактные данные<br />и мы свяжемся с Вами в течение дня</p>
          <div id="errorMsg" class="alert alert-danger hidden ptsans">Произошла ошибка, попробуйте еще раз</div>
        </div>
        <div class="modal-body">
          <input type="hidden" id="analytic"/>
          <input type="hidden" name="tourname" id="Tour_Id" value="ПРИСОЕДЕНИЛИСЬ К СООБЩЕСТВУ!" />
          <input type="hidden" name="form-id" id="Tour_Id" value="index-modal-sotial" />
          <div class="form-group text-align-left">
            <label for="name" class="takepart_input">Ваше имя и фамилия</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="form-group text-align-left">
            <label for="phone" class="takepart_input">Ваш телефон</label>
            <input type="tel" class="form-control" id="phone" required>
          </div>
          <div class="form-group text-align-left">
            <label for="mail" class="takepart_input">Ваша почта</label>
            <input type="email" class="form-control" id="mail" required>
          </div>
        </div>
        <div class="modal-footer">
          <div class="text-center">
            <input type="submit" class="btn_submitform tour_btn_takepart_blue tour_btn_witout_marginbottom" value="Отправить заявку" style="margin-top: 0px;font-size: 24px;margin-bottom: 0px;" />
            <button type="button" class="btn_submitform hidden" data-dismiss="modal" aria-label="Close">Закрыть</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--    modal-sotial end -->


