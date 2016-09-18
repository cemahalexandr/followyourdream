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
 $address = "info@dreamlifeexpeditions.com,cemah.alexandr@gmail.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Метка: ПРИСОЕДЕНИЛИСЬ К СООБЩЕСТВУ!\nФИО: $name\nТелефон: $phone\nЕмеил: $mail";
 $sub="$name ПРИСОЕДЕНИЛИСЬ К СООБЩЕСТВУ!"; //сабж

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$address");

ini_set('short_open_tag', 'On');

// Сохраняем в базу данных

$f = fopen("Заявки_в_сообщество.txt", "a+");

fwrite($f,"\n Метка: ПРИСОЕДЕНИЛИСЬ К СООБЩЕСТВУ!\n$date $time\nИмя: $name\nТелефон: $phone\nЕмеил: $mail");

fwrite($f,"\n ---------------");

fclose($f);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

    <link href="images/favicon.ico" rel="shortcut icon">
    <title>ПОЗДРАВЛЯЕМ! ВАША РЕГИСТРАЦИЯ ПРИНЯТА!</title>
    
    <!-- <meta http-equiv="Refresh" content="1;URL=https://www.facebook.com/FollowYourDREAM2015"/> -->
    </head>

    <body>
    <script language="javascript" type="text/javascript">
    document.location='https://www.facebook.com/FollowYourDREAM2015';
    </script>

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

</body>
</html>