<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST PLACE</title>
    <link rel="shortcut icon" href="/img/icon.ico" type="image/ico">
    <link rel="stylesheet" href="css/bootstrap-4.5.0/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <div class="wrapper">

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 hidden-sm-down">

                    </div>
                    <div class="logo col-3">
                        <a href="/"><img src="/img/logo.png" alt="logo"></a>
                    </div>
                    <div class="title col-8">
                        <h2>"Твое выражение лица когда <br></h2>
                        <h2> осознал преимущества ООП"</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="menu col-12">
                        <ul class="menu__elements d-flex justify-content-center">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                            <li><a href="/portfolio">Портфолио</a></li>
                            <li><a href="/SQLpage">SQL</a></li>
                            <li><a href="/JSpage">JS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <?php require_once 'application/views/' . $content_view; ?>

        <footer>
            <div class="container">
                <hr>
                <div class="row">
                    <div class="footer__contacts col-4">
                        <h3>Контакты</h3>
                        <ul>
                            <li>Email: <a href="mailto: timofeev.a.k@mail.ru">timofeev.a.k@mail.ru</a></li>
                            <li>Номер: <a href="tel:+79265983746">+7 (926) 598 37 46</a></li>
                            <li>Skype: <a href="">placehone</a></li>
                        </ul>
                    </div>
                    <div class="col-6 footer_about">
                        <h3>О нас</h3>
                        <p>
                            Вот дом.
                            Который построил Джек.

                            А это пшеница.
                            Которая в тёмном чулане хранится
                            В доме,
                            Который построил Джек.

                            А это весёлая птица-синица,
                            Которая ловко ворует пшеницу,
                            Которая в тёмном чулане хранится
                            В доме,
                            Который построил Джек.

                            Вот кот,
                            Который пугает и ловит синицу,
                            Которая ловко ворует пшеницу,
                            Которая в тёмном чулане хранится
                            В доме,
                            Который построил Джек.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <p>&#169; <?php echo date('Y'); ?> I'm, Ink.</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</body>

</html>