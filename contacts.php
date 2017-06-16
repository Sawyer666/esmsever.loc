<?
if (isset($_POST['send'])) {
    $from = trim(htmlspecialchars($_POST['from']));
    $subject = trim(htmlspecialchars($_POST['subject']));
    $message = trim(htmlspecialchars($_POST['message']));

    $_SESSION['from'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    $error_from = '';
    $error_subject = '';
    $error_message = '';
    $error = false;
    //  $message = 'Сообщение отправлено';

    if ($from == '' || !preg_match("/@/", $from)) {
        $error_from = 'Введите корректный email';
        $error = true;
    }
    if (strlen($subject) == 0) {
        $error_subject = 'Введите тему сообщения';
        $error = true;
    }
    if (strlen($message) == 0) {
        $error_message = 'Введите сообщение';
        $error = true;
    }
    if (!$error) {
        $emailTo = 'info@esmsever.ru';
        //$emailTo = 'alex84824@gmail.com';
        $body = "Email:\n $from \n\nТема:\n $subject \n\nСообщение:\n $message";
        $headers = 'From: My Site <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $from;
        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css"/>
    <title>Контакты</title>
</head>

<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->
<div class="container main">
    <div class="header_wrap">
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="img/golova3.png">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">ГЛАВНАЯ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="false" aria-expanded="true">
                                    О КОМПАНИИ<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/info.html">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a></li>
                                    <li><a href="lic.html">ЛИЦЕНЗИИ И СЕРТИФИКАТЫ</a></li>
                                </ul>
                            </li>

                            <li><a href="project.html">ПРОЕКТЫ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="false" aria-expanded="true">УСЛУГИ<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="nalisp.html">НАЛАДОЧНЫЕ ИСПЫТАНИЯ</a></li>
                                    <li><a href="him.html">ХИМИЧЕСКАЯ ОЧИСТКА</a></li>
                                    <li><a href="monrem.html">МОНТАЖ, РЕМОНТ ОБОРУДОВАНИЯ</a></li>
                                    <li><a href="tok.html">ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ ИТП И КОТЕЛЬНЫХ</a></li>
                                    <li><a href="sborka.html">СБОРКА ЩИТОВОГО ОБОРУДОВАНИЯ</a></li>
                                    <li><a href="stroika.html">СТРОИТЕЛЬНО-МОНТАЖНЫЕ РАБОТЫ</a></li>
                                    <li><a href="rasrab.html">ПРОЕКТИРОВАНИЕ</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">ПРОИЗВОДСТВО <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">О ПРОИЗВОДСТВЕ</a></li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">ПРОДУКЦИЯ<i class="fa fa-chevron-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/Heating.html">ПОВЕРХНОСТИ НАГРЕВА КОТЛОВ</a></li>
                                            <li><a href="#">ФИЛЬТРЫ ФИПа</a></li>
                                            <li><a href="#">ГИДРАВЛИЧЕСКИЕ РАЗДЕЛИТЕЛИ</a></li>
                                            <li><a href="#">ДЫМОВЫЕ ТРУБЫ</a></li>
                                            <li><a href="#">МЕТАЛЛОКОНСТРУКЦИИ</a></li>
                                            <li><a href="#">ВЕНТИЛЯЦИОННЫЕ РЕШЁТКИ</a></li>
                                            <li><a href="#">ОПОРЫ ТРУБОПРОВОДОВ</a></li>
                                            <li><a href="#">БЛОЧНО-МОДУЛЬНЫЕ КОТЕЛЬНЫЕ</a></li>
                                            <li><a href="#">КОНТЕЙНЕРЫ</a></li>
                                            <li><a href="Insulation.html">ИЗОЛЯЦИЯ</a></li>
                                            <li><a href="#">ИЗДЕЛИЯ СИП</a></li>
                                            <li><a href="#">СКОБЯНЫЕ ИЗДЕЛИЯ</a></li>
                                            <li><a href="#">СНЕГОПЛАВИЛЬНЫЕ УСТАНОВКИ</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="otziv.html">ОТЗЫВЫ</a></li>
                            <li><a href="contacts.php">КОНТАКТЫ</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
    </div>

    <div class="wrap">
        <div class="inner"></div>
        <div class="container">
            <div class="blog-header">
                <h2 class="block-header"><strong class="grey">Контакты</strong></h2>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 blog-main">
                    <div class="container-fluid">
                        <h3>Отправка сообщения</h3>
                        <div class="form-area">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">От кого</label>
                                    <input class="form-control" type="text" name="from" placeholder="Введите email"
                                           value="">
                                    <small id="emailHelp" class="form-text text-muted"
                                           style="color: red;"><?= $error_from ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Тема сообщения</label>
                                    <input class="form-control" type="text" name="subject" placeholder="Тема письма"
                                           value="">
                                    <small id="emailHelp" class="form-text text-muted"
                                           style="color: red;"><?= $error_subject ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Сообщение</label>
                                    <textarea class="form-control" type="text" placeholder="Текст сообщения"
                                              name="message" rows="4"></textarea>
                                    <small id="emailHelp" class="form-text text-muted"
                                           style="color: red;"><?= $error_message ?></small>
                                </div>
                                <button id="msg_send_btn" type="submit" name="send" class="btn btn-primary">Отправить
                                </button>
                                <? if (isset($emailSent) && $emailSent == true) { ?>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <label style="color: red">Ваше письмо отправлено!</label>
                                    </div>
                                <? } ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr class="separator">
                </div>
                <div class="clearfix wrap_ruk_img"></div>
                <div class="col-md-12 margin_top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-5 blog-main">
                                <h3 class="contacts_title">Офис</h3>
                                <p>
                                    <strong>Фактический адрес:</strong> РФ, 192012, г. Санкт-Петербург, пр. Обуховской
                                    обороны, д.120,
                                    литер Б, оф.612, БЦ «Новотроицкий»<br><br>
                                    <strong>Сайт:</strong> www.esmsever.ru<br><br>
                                    <strong>Конт.телефоны:</strong> 8 (812) 458-88-93, 8 (921) 909-93-58<br>
                                    <strong>E-mail:</strong> info@esmsever.ru, esmsever@mail.ru<br><br>
                                </p>
                            </div>
                            <iframe id="map_one" class="well well-sm col-xs-12 col-sm-7"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4006.134457628271!2d30.46941136084949!3d59.864629838492625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46962f120b3a47bf%3A0xcd0759d78467bec7!2z0L_RgNC-0YHQvy4g0J7QsdGD0YXQvtCy0YHQutC-0Lkg0J7QsdC-0YDQvtC90YssIDEyMCwg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5MjAxMg!5e0!3m2!1sru!2sru!4v1494489336232"
                                    height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <div class="col-sm-5 blog-main">
                                <h3 class="contacts_title">Производство</h3>
                                <p>
                                    <strong>Фактический адрес:</strong> РФ, 198097 , г. Санкт-Петербург, пр. Стачек,
                                    д.47,
                                    производственный цех на территории Кировского завода<br><br>
                                    <strong>Конт.телефоны:</strong> 8 (812) 458-88-93, 8 (921) 909-93-58<br><br>
                                </p>
                            </div>

                            <iframe id="map_two" class="well well-sm col-xs-12 col-sm-7"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1001.1231312413775!2d30.25924127114005!3d59.87826085591625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963a7d06e77ad1%3A0x40c776d7ab645284!2z0L_RgC4g0KHRgtCw0YfQtdC6LCA0Nywg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5ODA5Nw!5e0!3m2!1sru!2sru!4v1494497738889"
                                    height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="clearfix wrap_ruk_img"></div>
                </div>

            </div>
        </div>
    </div>
    <div class="hFooter"></div>
</div>
<footer class="blog-footer">

    <p><strong>ООО "ЭСМ Север" , Наш адрес:</strong> РФ, 192012, г. Санкт-Петербург, пр.
        Обуховской обороны, д.120, литер Б, оф.612, БЦ «Новотроицкий»<br>
        <strong>Телефоны: </strong>8 (812) 458-88-93, 8 (921) 909-93-58.
        <strong>E-mail: </strong>info@esmsever.ru, esmsever@mail.ru<br>
        Copyright 2016. ООО "ЭСМ Север"
    </p>

    <p id="back-top" style="display: none;">
        <a href="#top">
            <span id="top-span" class="glyphicon glyphicon-menu-up"></span>
        </a>
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script src="/js/jqueryMainAppModule.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script>
    $(function () {
        $().mainAppRun();
    });
</script>
</body>

</html>