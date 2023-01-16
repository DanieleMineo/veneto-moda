<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daniele Mineo">
    <meta name = "language" content = "IT, italiano">
    <meta name="description" content = "<?php echo $description; ?>">
    <!-- link ai font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600;700&display=swap" rel="stylesheet">
    <!-- link favicon -->
    <link rel="shortcut icon" href="icone/favicon.ico" type="image/x-icon">
    <!-- link al css -->
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- script a fancybox -->
    <script src="js/jquery-3.6.1.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- title -->
    <title><?php echo $title; ?></title>
</head>
<body>
   <header id="header">
        <div id="fascia-promo-lingue">
            <div id="sottofascia-promo-lingue">
                <span>BLACK FRIDAY EARLY ACCESS 18-11-2022 SOLO IN NEGOZIO</span>
                <div class="lingue">
                    <strong><a href="#">IT</a></strong> | <a href="#">EN</a>
                </div>
            </div>
        </div>
        <div id="fascia-menu">
            <div id="sottofascia-menu">
                    <a href="index.php" title="Vai a Home" id="logo"><img src="icone/logo-veneto-moda400.png" alt="logo" title="Homepage" width="100" height="100"></a>
                    <nav id="menu">
                        <div id="menu-principale">
                            <ul id="principale">
                                <li><a href="index.php" title="Home" <?php if($title=="Veneto Moda | Home") {echo "class=\"current\"";} ?>>home</a></li>
                                <li><a href="chi-siamo.php" title="Chi siamo" <?php if($title=="Veneto Moda | Chi Siamo") {echo "class=\"current\"";} ?>>chi siamo</a></li>
                                <li><a href="#" title="Collezione">collezione</a>
                                    <ul id="secondario">
                                        <li class="dropdown"><a href="man.php" title="Man" <?php if($title=="Veneto Moda | Man") {echo "class=\"current\"";} ?>>man</a></li>
                                        <li class="dropdown"><a href="woman.php" title="Woman" <?php if($title=="Veneto Moda | Woman") {echo "class=\"current\"";} ?>>woman</a></li>
                                        <li class="dropdown"><a href="kid.php" title="Kid" <?php if($title=="Veneto Moda | Kid") {echo "class=\"current\"";} ?>>kid</a></li>
                                    </ul>
                                </li>
                                <li><a href="news.php" title="News" <?php if($title=="Veneto Moda | News") {echo "class=\"current\"";} ?>>news</a></li>
                                <li><a href="contatti.php" title="Contatti" <?php if($title=="Veneto Moda | Contatti") {echo "class=\"current\"";} ?>>contatti</a></li>
                                <li><a href="careers.php" title="Careers" <?php if($title=="Veneto Moda | Careers") {echo "class=\"current\"";} ?>>careers</a></li>
                            </ul>
                        </div>
                        <div id="hamburger-menu">
                            <a href="#" class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </a>
                            <nav class="mobile-menu">
                                <ul id="menu-mobile">
                                    <li><a href="index.php" title="Home">home</a></li>
                                    <li><a href="chi-siamo.php" title="Chi siamo">chi siamo</a></li>
                                    <li><a href="#" title="Collezione" id="dropdown">collezione</a>
                                        <ul id="sottomenu">
                                            <li id="man"><a href="man.php" title="Man">man</a></li>
                                            <li><a href="woman.php" title="Woman">woman</a></li>
                                            <li><a href="kid.php" title="Kid">kid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news.php" title="News">news</a></li>
                                    <li><a href="contatti.php" title="Contatti">contatti</a></li>
                                    <li><a href="careers.php" title="Careers">careers</a></li>
                                </ul>
                                <div class="lingue">
                                    <span><a href="#"><strong>IT </strong></a>| EN</span>
                                </div>
                                <div class="social-container">
                                    <h4>SEGUICI SU</h4>
                                    <div class="socials">
                                        <a href="http://www.instragram.com" title="Vai a Instagram" target="_blank"><img src="icone/instagram.png" alt="instagram" title="Instagram"></a>
                                        <a href="http://www.facebook.com" title="Vai a Facebook" target="_blank"><img src="icone/facebook.png" alt="facebook" title="Facebook"></a>
                                        <a href="http://www.pinterest.com" title="Vai a Pinterest" target="_blank"><img src="icone/pinterest.png" alt="pinterest" title="Pinterest"></a>
                                    </div>
                                    <img src="icone/logo-veneto-moda400.png" alt="logo-san-martino" title="Logo San Martino">
                                </div>
                            </nav>
                        </div>
                    </nav>
            </div>
        </div>
       