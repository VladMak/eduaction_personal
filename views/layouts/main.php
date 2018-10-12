<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use app\models\Template;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Валин сайт</title>
    
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="keywords" content="Eduversity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <?= Html::csrfMetaTags() ?>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->

    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//web font-->

    <?php $this->head() ?>
</head>
<?php
$template = Template::find()->all();
?>

<!-- header -->
<header>
    <?php $this->beginBody() ?>
    <div class="container">
        <!-- top header -->
        <section class="row top_header pt-3">
            <div class="col-lg-6">
            </div>
                <div class="col-lg-6 buttons">
                    <p><i class="fas mr-1 fa-phone"></i> <?php echo $template[0]['phone']; ?></p>
                </div>
        </section>
        <!-- top header -->

        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-light py-sm-4 py-2">
            <!-- logo -->
            <h1>
                <a class="navbar-brand" href="index.html"> <i class="fab fa-affiliatetheme"></i>
                    <?php echo $template[0]['site_name']; ?>
                </a>
            </h1>
            <!-- //logo -->
            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- main nav -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center">
                    <li class="nav-item  mr-lg-3">
                        <a class="nav-link" href="<?php echo Url::to(['site/index']); ?>">Главная</a>
                    </li>
                    <li class="nav-item mr-lg-3">
                        <a class="nav-link" href="<?php echo Url::to(['site/portfolio']); ?>">Портфолио</a>
                    </li>
                    <li class="nav-item mr-lg-3">
                        <a class="nav-link" href="<?php echo Url::to(['site/photo']); ?>">Фото</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="<?php echo Url::to(['site/gto']); ?>">ГТО</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="<?php echo Url::to(['site/npb']); ?>">НПБ</a>
                    </li>
                    <li class="dropdown nav-item mr-lg-3">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle ">
                            Еще
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item">
                                <a href="<?php echo Url::to(['site/classruk']); ?>" class="nav-link">Классный руководитель</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo Url::to(['site/vneklrab']); ?>" class="nav-link">Внеклассная работа</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- //main nav -->
        </nav>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->



<?= $content ?>



<!-- footer --> 
<footer>
    <div class="container-fluid p-sm-5 py-5">
        <div class="row footer-gap">
            <div class="col-lg-3 col-sm-6">
                <h3 class="text-uppercase mb-3">Адрес</h3>
                <address class="mb-0">
                    <p class="mb-3"><i class="fas fa-map-marker"></i> <?php echo $template[0]['adress']; ?></p>
                    <p><i class="fas fa-clock"></i> Время работы: <?php echo $template[0]['time_work']; ?></p>
                    <p><i class="fas fa-phone"></i> <?php echo $template[0]['phone']; ?></p>
                    <p><i class="fas fa-envelope-open"></i> <a href="mailto:<?php echo $template[0]['email']; ?>"><?php echo $template[0]['email']; ?></a></p>
                </address>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-sm-0 mt-4 p-md-0">
                <h3 class="text-uppercase mb-3">О нас</h3>
                <div class="links">
                    <a class="text-capitalize" href="<?php echo Url::to(['site/why']); ?>"> Почему мы</a>
                    <a class="pt-2 text-capitalize" href="<?php echo Url::to(['site/doc']); ?>site/doc"> Документы</a>
                    <a class="pt-2 text-capitalize" href="<?php echo Url::to(['site/tech']); ?>site/tech"> Тех. поддержка</a>
                </div>  
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 mt-lg-0 mt-sm-5 mt-4 p-md-0">
                <h3 class="text-uppercase mb-3">Поддержка</h3>
                <div class="links">
                    <a class="text-capitalize" href="<?php echo Url::to(['site/contact']); ?>"> Свяжитесь с нами</a>
                    <a class="pt-2 text-capitalize" href="<?php echo Url::to(['site/policy']); ?>"> Политика приватности</a>
                </div>  
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-lg-0 mt-sm-5 mt-4">
                <h3 class="text-uppercase mb-3"> Я в соц. сетях</h3>
                <ul class="social mt-lg-0 mt-3">
                    <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li class="mr-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                    <li class="mr-1"><a href="#"><span class="fab fa-vk"></span></a></li></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright pb-5 text-center">
        <p><?php echo $template[0]['copyright']; ?></p>
    </div>
</footer>
<!-- footer -->

    
    <script>
        $('#simply-countdown-losange').simplyCountdown({
            year: 2020,
            month: 1,
            day: 06
        });
    </script>
    <!-- //Countdown-Timer-JavaScript -->
    
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>