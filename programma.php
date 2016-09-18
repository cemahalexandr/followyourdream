<?php
 /* Здесь проверяется существование переменных */
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $mail = $_POST['mail'];
 $date = date("d.m.y"); // число.месяц.год
 $time=date("H:i"); // часы:минуты:секунды
 $box = $_POST['box'];
 $price = $_POST['price'];
 $tourname = $_POST['tourname'];


/* Сюда впишите свою эл. почту */
 $address = "info@dreamlifeexpeditions.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "ФИО: $name\nТелефон: $phone\nЕмеил: $mail\nТур: $tourname";
 $sub="$name хочет получить развернутую программу"; //сабж

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$mail");

ini_set('short_open_tag', 'On');

// Сохраняем в базу данных

$f = fopen("Заявкипрограммы.txt", "a+");

fwrite($f,"\n $date $time\nИмя: $name\nТелефон: $phone\nЕмеил: $mail\nТур: $tourname");

fwrite($f,"\n ---------------");

fclose($f);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html><head>
    <link href="images/favicon.ico" rel="shortcut icon">
    <title>ПОЗДРАВЛЯЕМ! ВАША РЕГИСТРАЦИЯ ПРИНЯТА!</title>
<style>body{background:url(data:imgae/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAIAAADZSiLoAAAACXBIWXMAAAsTAAALEwEAmpwYAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh4ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAAAB9JREFUeNo8yDEBAAAIAyC0f9VlmJ+cTFtgkQTzdwMAlasIxtvT4jUAAAAASUVORK5CYII=) repeat scroll 0 0 rgba(0,0,0,0);color:#313E47;font-family:Arial;font-size:15px;height:100%;line-height:1;width:100%}html{height:100%}ol,ul{list-style:none outside none}h2{color:#313E47;font-size:36px;font-weight:700;line-height:44px;text-align:center;text-transform:uppercase}h3{font-size:18px;font-weight:700;text-align:center;margin:20px 0}a{color:#69B9FF}.order_number{color:#424242;font-family:Arial;font-size:30px;line-height:38px;text-align:center;text-transform:uppercase;margin:25px 0}.url_more_info{display:block;font-size:20px;text-align:center;margin:20px 0}.block_success{max-width:960px;margin:0 auto;padding:0 30px}.list_info{display:inline-block;text-align:left}.list_info li{margin:11px 0}.list_info li span{display:inline-block;font-style:normal;font-weight:700;width:150px}.fail{text-align:center;margin:25px 0 50px}.email{margin-top:40px;position:relative;text-align:center}.error{color:#CA3F3F;display:none;position:absolute;top:-28px}.mail_block{display:inline-block}.email input{border:1px solid #B6B6B6;border-radius:5px;font-size:14px;height:30px;margin-bottom:10px;outline:medium none;padding-left:10px;padding-right:10px;width:200px}.button{background:0 repeat scroll 0 0 rgba(0,0,0,0);border:1px solid #0076A3;border-radius:.5em;box-shadow:0 1px 2px rgba(0,0,0,0.2);color:#D9EEF7;cursor:pointer;display:inline-block;font:15px/100% Arial,Helvetica,sans-serif;outline:medium none;text-align:center;text-decoration:none;text-shadow:0 1px 1px rgba(0,0,0,0.3);padding:.55em 2em .6em}.button:hover{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#D9EEF7;text-decoration:none}.button:active{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6;position:relative;top:1px}.disabled{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6}.disabled:hover{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6;cursor:default}.disabled:active{top:0}.mail_s{color:green;position:inherit;top:0}a:hover,.order_number span,.url_more_info:hover{color:#E14740}.success,.wrap_list_info{text-align:center}</style></head><body><br><center><img align="center" src="data:image/jpeg;base64,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"></center><div class="wrap_block_success"><div class="block_success"><h2>Поздравляем! Ваша регистрация принята!</h2><p class="success">В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.</p><h1 style="color: #e14740; text-align: center;">Спасибо, что Вы выбрали нас!</h1><a href="http://dreamlifeexpeditions.com/"><h1 style="color: #3CA30F; text-align: center;">Вернуться на сайт</h1></a></div></div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37353310 = new Ya.Metrika({
                    id:37353310,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37353310" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    
    <!-- GoogleAnalytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75713213-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- END GoogleAnalytics -->

</body></html>