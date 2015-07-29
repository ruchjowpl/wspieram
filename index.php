<?php session_start(); include 'config.php';?><!DOCTYPE html>
<html>
    <head>
        <title>POPIERASZ DZIAŁANIA NA RZECZ JOW?</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <link rel="shortcut icon" href="favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap-theme.min.css"/>
        <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900&subset=latin,latin-ext' rel='stylesheet'
            type='text/css'>
            <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
            <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-62959990-1', 'auto');
            </script>
        </head>
        <body>
            <?php if (isset($_GET['status']) && $_GET['status'] == 'success' && !isset($_SESSION['trans_id']) && isValidReferer()) : ?>
            <script>
            <?php
            $cookie = isset($_COOKIE['paymentOption']) ? intval($_COOKIE['paymentOption']) : '';
            $_SESSION['trans_id'] = intval(uniqid(time()));
            ?>
            <?php if(!empty($cookie)) : ?>
            ga('require', 'ecommerce');
            <?php if($cookie == 1) : ?>
            ga('ecommerce:addTransaction', {
            'id': '<?php echo $_SESSION['trans_id'];?>',
            'affiliation': 'RUCH JOW',
            'revenue': '20',
            'currency': 'PLN'  // local currency code.
            });
            ga('ecommerce:addItem', {
            'id': '<?php echo $_SESSION['trans_id'];?>',
            'name': 'produkt20',
            'sku': 'P1',
            'price': '20',
            'quantity': '1',
            'currency': 'PLN' // local currency code.
            });
            <?php elseif($cookie == 2) : ?>
            ga('ecommerce:addTransaction', {
            'id': '<?php echo $_SESSION['trans_id'];?>',
            'affiliation': 'RUCH JOW',
            'revenue': '50',
            'currency': 'PLN'  // local currency code.
            });
            ga('ecommerce:addItem', {
            'id': '<?php echo $_SESSION['trans_id'];?>',
            'name': 'produkt50',
            'sku': 'P2',
            'price': '50',
            'quantity': '1',
            'currency': 'PLN' // local currency code.
            });
            <?php else : ?>
            ga('ecommerce:addTransaction', {
            'id': '<?php echo $_SESSION['trans_id'];?>',
            'affiliation': 'RUCH JOW',
            'revenue': '300',
            'currency': 'PLN'  // local currency code.
            });
            ga('ecommerce:addItem', {
            'id': '<?php echo $_SESSION['trans_id'];?>',
            'name': 'produktInne',
            'sku': 'P3',
            'price': 300,
            'quantity': '1',
            'currency': 'PLN' // local currency code.
            });
            <?php endif;?>
            <?php endif;?>
            ga('ecommerce:send');
            </script>
            <?php endif; ?>
            <div class="container-fluid">
                <div class="row slider-container">
                    <div class="slider-content" style="margin-top : 10px; padding-top : 10px">
                        <div class="row">
                        <div class="container">
                            <div class="col-md-4">
                                <a href="#0" class="logo">
                                    <img src="assets/img/ruchjow-pl-logo.png" alt=""/>
                                </a>
                            </div>
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-3">
                                
                                <a href="#0" class="logo">
                                    <img src="assets/img/referendum_logo.png" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <ul class="slider">
                        <li class="slider-item">
                            <div class="slider-content">
                                <div class="container">
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <p class="text-center">Pomóż nam finansowo w kampanii referendalnej - całą prowadzimy wyłącznie dzięki darowiznom Polaków. Partie polityczne mogą liczyć na finansowanie z budżetu.<br> My możemy liczyć na siebie nawzajem.<p>
                        <ol class="payments-container">
                            <li class="col-sm-4 col-lg-4 payment-item">
                                <a href="https://secure.transferuj.pl/?h=83e6087807b599a4390a7532fed7e02e6ac4a08b"
                                    class="red">
                                    wpłać <strong><big>20</big> PLN</strong>
                                </a>
                            </li>
                            <li class="col-sm-4 col-lg-4 payment-item">
                                <a href="https://secure.transferuj.pl/?h=db3d08b333d8f5b40520026a811d25085b86c65a"
                                    class="red">
                                    wpłać <strong><big>50</big> PLN</strong>
                                </a>
                            </li>
                            <li class="col-sm-4 col-lg-4 payment-item">
                                <a href="https://secure.transferuj.pl/?id=15885&opis=Wsparcie%20Ruchu%20JOW&crc=LP&pow_url=http%3A%2F%2Fwspieram.ruchjow.pl%2F%3Fstatus%3Dsuccess&pow_url_blad=http%3A%2F%2Fwspieram.ruchjow.pl%2F%3Fstatus%3Dfailure&md5sum=d60137919cb8fd535bdd469b1b8ceb6c"
                                    class="custom-amount blue ">
                                    wpłać<br/><strong>inną kwotę</strong>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
                    <div class="container">
                        <p class="text-center">lub wpłać bezpośrednio na konto dowolną kwotę:<br/> Pekao SA nr konta: 81 1240 6768 1111 0010 5970 1904 <br/>
                            z dopiskiem "Wsparcie Ruchu JOW"
                        </p>
                    </div>
                </div>
                <div class="row promises-container">
                    <div class="container">
                        <h2 class="promise-title">Aby dokonać zmiany każdego dnia:</h2>
                        <ol class="promises-list clearfix">
                            <li class="col-sm-offset-1 col-md-offset-1 col-sm-2 col-md-2 promise-item">
                                <img class="promise-img" src="assets/img/promises/promise1.png" alt=""/>
                                <p class="promise-text">Organizujemy działania edukacyjne – seminaria, szkolenia, konferencje</p>
                            </li>
                            <li class="col-sm-2 col-md-2 promise-item">
                                <img class="promise-img" src="assets/img/promises/promise2.png" alt=""/>
                                <p class="promise-text">Inicjujemy spotkania </p>
                            </li>
                            <li class="col-sm-2 col-md-2 promise-item">
                                <img class="promise-img" src="assets/img/promises/promise3.png" alt=""/>
                                <p class="promise-text">Drukujemy i kolportujemy materiały – Wysłaliśmy do was ich już ponad 1 mln.</p>
                            </li>
                            <li class="col-sm-2 col-md-2 promise-item">
                                <img class="promise-img" src="assets/img/promises/promise4.png" alt=""/>
                                <p class="promise-text">Produkujemy spoty filmowe i radiowe</p>
                            </li>
                            <li class="col-sm-2 col-md-2 promise-item">
                                <img class="promise-img" src="assets/img/promises/promise5.png" alt=""/>
                                <p class="promise-text">Promujemy ideę JOW w internecie</p>
                            </li>
                        </ol>
                        <p class="text-center">
                            Udowadniamy, że razem możemy wiele. Mamy szansę na największą zmianę od 1989 roku. <br> Miej w niej swój własny udział, wpłać darowiznę.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="container" style="padding: 25px">
                        <div class="col-md-4 .col-xs-12">
                            <img src="assets/img/guide.png" alt="przewodnik JOW">
                            
                        </div>
                        <div class="col-md-8 .col-xs-12" >
                            <h2>Pobierz przewodnik i poznaj JOWy</h2>
                            <ul>
                                <li>Bezpłatne kompendium wiedzy o JOWach</li>
                                <li>Wszystko w jednym i przystępnym ebooku</li>
                                <li>Dowiesz się kim jesteśmy i o co walczymy</li>
                            </ul>
                            <br>
                            <p style="text-align:center"> <a class="btn-lg btn-primary"  style="padding: 25px" href="/res/przewodnik-jow.pdf" target="_blank" >Pobierz przewodnik</a> </p>
                        </div>
                    </div>
                </div>
                
                <div class="row footer">
                    Zebraliśmy już: <strong><?php echo $current; ?></strong>
                </div>
            </div>
            <script type="text/javascript" src="assets/vendor/jquery.js"></script>
            <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="assets/js/main.js"></script>
        </body>
    </html>