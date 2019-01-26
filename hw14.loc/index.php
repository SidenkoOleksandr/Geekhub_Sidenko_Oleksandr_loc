<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $data = require('data.php');?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-light container">
        <a class="navbar-brand" href="<?php echo $data['mainLog']['url'] ?>">
            <img src="<?php echo $data['mainLog']['imgLogo'] ?>" alt="<?php echo $data['mainLog']['alt'] ?>">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mainMenu">
                <?php $i = 0; ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $data['mainMenu'][$i]['title'] ?>
                        <span class="sr-only"></span>
                    </a>
                    <?php $i++ ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $data['mainMenu'][$i]['title'] ?></a>
                    <?php $i++ ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $data['mainMenu'][$i]['title'] ?></a>
                    <?php $i++ ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $data['mainMenu'][$i]['title'] ?></a>
                    <?php $i++ ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $data['mainMenu'][$i]['title'] ?></a>
                    <?php $i++ ?>
                </li>
            </ul>
        </div>
    </nav>
    <section class="header-content d-flex flex-column col-12">
        <h1><?php echo $data['headerContent']['heading'] ?></h1>
        <p><?php echo $data['headerContent']['paragr'] ?></p>
        <a class="btn mx-auto px-4 m-4" href="<?php echo $data['headerContent']['buttonBuy']['url'] ?>"
           role="button"><?php echo $data['headerContent']['buttonBuy']['title'] ?>
        </a>
        <a class="mx-auto px-4" href="<?php echo $data['headerContent']['buttonMouse']['url'] ?>">
            <img src="<?php echo $data['headerContent']['buttonMouse']['icon'] ?>" alt="icon_mouse">
        </a>
        <a class="mx-auto px-4 m-2" href="<?php echo $data['headerContent']['buttonScrool']['url'] ?>">
            <?php echo $data['headerContent']['buttonScrool']['title'] ?>
        </a>
    </section>
</header>
<main>

    <section class="best-design col-sm-12 col-md-6">
        <div class="wrap-best-design container">
            <h2><?php echo $data['BestDesign']['heading'] ?></h2>
            <p>
                <?php echo $data['BestDesign']['paragr'] ?>
            </p>
            <a class="btn mx-auto px-4 m-4" href="<?php echo $data['BestDesign']['buttonBuy']['url'] ?>" role="button">
                <?php echo $data['BestDesign']['buttonBuy']['title'] ?>
            </a>

        </div>
    </section>

    <section class="best-code col-sm-12 col-md-6">
        <div class="wrap-best-code container">
            <h2><?php echo $data['BestCode']['heading'] ?></h2>
            <p>
                <?php echo $data['BestCode']['paragr'] ?>
            </p>
            <a class="btn mx-auto px-4 m-4" href="<?php echo $data['BestCode']['buttonBuy']['url'] ?>" role="button">
                <?php echo $data['BestCode']['buttonBuy']['title'] ?>
            </a>
        </div>
    </section>
    <section class=" what_we_do container">
        <?php $i = 0; ?>
        <h2><?php echo $data['what_we_do']['heading'] ?></h2>
        <ul class="row">
            <li class="col-md-6">
                <a href="<?php echo $data['what_we_do'][$i]['icon']['url'] ?>">
                    <img src="<?php echo $data['what_we_do'][$i]['icon']['iconImg'] ?>"
                         alt="<?php echo $data['what_we_do'][$i]['icon']['alt'] ?>">
                </a>
                <h3><?php echo $data['what_we_do'][$i]['title'] ?></h3>
                <p>
                    <?php echo $data['what_we_do'][$i]['paragr'] ?>
                </p>
                <?php $i++ ?>
            </li>
            <li class="col-md-6">
                <a href="<?php echo $data['what_we_do'][$i]['icon']['url'] ?>">
                    <img src="<?php echo $data['what_we_do'][$i]['icon']['iconImg'] ?>"
                         alt="<?php echo $data['what_we_do'][$i]['icon']['alt'] ?>">
                </a>
                <h3><?php echo $data['what_we_do'][$i]['title'] ?></h3>
                <p>
                    <?php echo $data['what_we_do'][$i]['paragr'] ?>
                </p>
                <?php $i++ ?>
            </li>
            <li class="col-md-6">
                <a href="<?php echo $data['what_we_do'][$i]['icon']['url'] ?>">
                    <img src="<?php echo $data['what_we_do'][$i]['icon']['iconImg'] ?>"
                         alt="<?php echo $data['what_we_do'][$i]['icon']['alt'] ?>">
                </a>
                <h3><?php echo $data['what_we_do'][$i]['title'] ?></h3>
                <p>
                    <?php echo $data['what_we_do'][$i]['paragr'] ?>
                </p>
                <?php $i++ ?>
            </li>
            <li class="col-md-6">
                <a href="<?php echo $data['what_we_do'][$i]['icon']['url'] ?>">
                    <img src="<?php echo $data['what_we_do'][$i]['icon']['iconImg'] ?>"
                         alt="<?php echo $data['what_we_do'][$i]['icon']['alt'] ?>">
                </a>
                <h3><?php echo $data['what_we_do'][$i]['title'] ?></h3>
                <p>
                    <?php echo $data['what_we_do'][$i]['paragr'] ?>
                </p>
                <?php $i++ ?>
            </li>
        </ul>
        <a class="btn mx-auto px-4 m-4" href="<?php echo $data['what_we_do']['buttonBuy']['title'] ?>"
           role="button"><?php echo $data['what_we_do']['buttonBuy']['title'] ?>
        </a>
    </section>

    <section class="app">
        <?php $i = 0; ?>
        <a href="<?php echo $data['app'][$i]['url'] ?>">
            <img src="<?php echo $data['app'][$i]['img'] ?>" alt="<?php echo $data['app'][$i]['imgAlt'] ?>">
            <div class="hide" style="position: absolute;">
                <h2><?php echo $data['app'][$i]['heading'] ?></h2>
                <p>
                    <?php echo $data['app'][$i]['paragr'] ?>
                </p>
            </div>
            <?php $i++ ?>
        </a>
        <a href="<?php echo $data['app'][$i]['url'] ?>">
            <img src="<?php echo $data['app'][$i]['img'] ?>" alt="<?php echo $data['app'][$i]['imgAlt'] ?>">
            <div class="hide" style="position: absolute;">
                <h2><?php echo $data['app'][$i]['heading'] ?></h2>
                <p>
                    <?php echo $data['app'][$i]['paragr'] ?>
                </p>
            </div>
            <?php $i++ ?>
        </a>
        <a href="<?php echo $data['app'][$i]['url'] ?>">
            <img src="<?php echo $data['app'][$i]['img'] ?>" alt="<?php echo $data['app'][$i]['imgAlt'] ?>">
            <div class="hide" style="position: absolute;">
                <h2><?php echo $data['app'][$i]['heading'] ?></h2>
                <p>
                    <?php echo $data['app'][$i]['paragr'] ?>
                </p>
            </div>
            <?php $i++ ?>
        </a>
    </section>
    <section class="about_us">
        <?php $i = 0; ?>
        <h2><?php echo $data['about_us']['heading'] ?></h2>
        <p>
            <?php echo $data['about_us']['paragr'] ?>
        </p>
        <ul>
            <li class="item-members">
                <a href="<?php echo $data['about_us'][$i]['url'] ?>">
                    <img src="<?php echo $data['about_us'][$i]['photo'] ?>"
                         alt="<?php echo $data['about_us'][$i]['photoAlt'] ?>">
                    <h3><?php echo $data['about_us'][$i]['name'] ?></h3>
                    <p><?php echo $data['about_us'][$i]['profession'] ?></p>
                </a>
                <?php $i++ ?>
            </li>
            <li class="item-members">
                <a href="<?php echo $data['about_us'][$i]['url'] ?>">
                    <img src="<?php echo $data['about_us'][$i]['photo'] ?>"
                         alt="<?php echo $data['about_us'][$i]['photoAlt'] ?>">
                    <h3><?php echo $data['about_us'][$i]['name'] ?></h3>
                    <p><?php echo $data['about_us'][$i]['profession'] ?></p>
                </a>
                <?php $i++ ?>
            </li>
            <li class="item-members">
                <a href="<?php echo $data['about_us'][$i]['url'] ?>">
                    <img src="<?php echo $data['about_us'][$i]['photo'] ?>"
                         alt="<?php echo $data['about_us'][$i]['photoAlt'] ?>">
                    <h3><?php echo $data['about_us'][$i]['name'] ?></h3>
                    <p><?php echo $data['about_us'][$i]['profession'] ?></p>
                </a>
                <?php $i++ ?>
            </li>
            <li class="item-members">
                <a href="<?php echo $data['about_us'][$i]['url'] ?>">
                    <img src="<?php echo $data['about_us'][$i]['photo'] ?>"
                         alt="<?php echo $data['about_us'][$i]['photoAlt'] ?>">
                    <h3><?php echo $data['about_us'][$i]['name'] ?></h3>
                    <p><?php echo $data['about_us'][$i]['profession'] ?></p>
                </a>
                <?php $i++ ?>
            </li>
        </ul>
        <a class="btn mx-auto px-4 m-4" href="<?php echo $data['about_us']['buttonWatch']['url'] ?>" role="button">
            <?php echo $data['about_us']['buttonWatch']['title'] ?>
        </a>
    </section>
    <section class="map">
        <iframe src="<?php echo $data['map'] ?>"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
</main>

<footer>
    <p>
        <?php echo $data['footerParagr'] ?>
    </p>
</footer>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>