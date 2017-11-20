<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title>Kancelaria ZRPat</title>
</head>

<body>
<section class=container>
    <div class="row">
        <div class="col-6-6">
            <div class="section1 parallax">
                <div class="header">
                    <div class="nav">
                        <div class="logo"><a href="http://localhost/zrpat/"> ZESPÓŁ RZECZNIKÓW<br>PATENTOWYCH</a></div>
                        <div class="menu">
<!--                            --><?php //wp_nav_menu(['menu' => 'main']); ?>
                            <ul>
                                <li class="about"><a>O FIRMIE</a>

                                </li>
                                <li><a href="">USŁUGI</a>
                                </li>
                                <li><a href="http://localhost/zrpat/index.php/kontakt/">KONTAKT</a></li>
                            </ul>
                            <div class="fullMenu">
                                <ul>
                                    <li><a href=" http://localhost/zrpat/index.php/rzecznicy/">Rzecznicy</a></li>
                                    <li><a href=" http://localhost/zrpat/index.php/o-nas/">O Nas</a></li>
                                    <li><a href="http://localhost/zrpat/index.php/klienci/ ">Nasi klienci</a></li>
                                    <li><a href="http://localhost/zrpat/index.php/zagranica/">Wspópraca z zagranicą</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="navIcon" onclick="myFunction(this)">
                            <div class="hamburger1"></div>
                            <div class="hamburger2"></div>
                            <div class="hamburger3"></div>
                        </div>

                    </div>
                </div>
                <div class="slider">
                    <ul class="karousel">
                        <li class="slide showing">Patenty</li>
                        <li class="slide">Znaki<br>towarowe</li>
                        <li class="slide">Wzory<br>przemysłowe</li>
                        <li class="slide">Patenty<br>europejskie</li>
                        <li class="slide" id="erka">&reg;</li>
                    </ul>
                </div>
                <div class="menuMobile">
                    <ul>
                        <li><a href=" http://localhost/zrpat/index.php/o-nas/">O NAS</a></li>
                        <li>USŁUGI</li>
                        <li><a href="http://localhost/zrpat/index.php/kontakt/">KONTAKT</a></li>
                        <li><a href=" http://localhost/zrpat/index.php/rzecznicy/">RZECZNICY</a></li>
                        <li><a href="http://localhost/zrpat/index.php/klienci/ ">NASI KLIENCI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>