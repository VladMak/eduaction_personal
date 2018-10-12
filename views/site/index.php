<?php
use yii\helpers\Url;
?>

<section class="banner layer" id="home">
  <div class="container">
    <div class="banner-text">
      <div class="slider-info mb-4">
        <div class="agileinfo-logo">
          <h3>
           Персональный сайт учителя
         </h3>
       </div>
       <h3 class="txt-w3_agile mb-3">Тихоновой Екатерины Кондратьевны</h3>
       <a href="course.html" class="mr-2"><i class="fas fa-graduation-cap"></i> Наши курсы</a>
       <a href="about.html"><i class="fas fa-book"></i> Читать еще</a>
     </div>
     <!-- To bottom button-->
     <div class="thim-click-to-bottom">
      <div class="rotate">
        <a href="<?php echo Url::to(['site/index']); ?>welcome" class="scroll">
          <i class="fas fa-angle-double-down"></i>
        </a>
      </div>
    </div>
    <!-- //To bottom button-->

  </div>
</div>
</section>
<!-- //banner -->

<section class="about py-5">
  <div class="container py-sm-3">
    <h3 class="heading text-capitalize mb-lg-5 mb-4"> Тихонова Екатерина Кондратьевна</h3>
    <div class="row about-grids">
      <div class="col-lg-6">
        <h4>Заголовок</h4>
        <p class="mb-3">Равным образом реализация намеченных плановых заданий представляет собой интересный эксперимент проверки систем массового участия. Равным образом дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки соответствующий условий активизации. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям. </p>
        
      </div>
      <div class="col-lg-6 mt-lg-0 mt-5">
        <img class="img-fluid main_page_img" src="<?php echo Url::base().'/'; ?>images/img/01.jpg" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!-- welcome -->
<section class="welcome py-5" id="welcome">
  <div class="container py-sm-3">
    <div class="row welcome-grids">
      <div class="col-lg-4 mb-lg-0 mb-5">
        <div class="image1 mb-4">
          <h4>Ученикам</h4>
          <p class="mt-3"><a href="<?php echo Url::to(['pupil/index', 'id' => 0]); ?>">Техника безопасности</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['pupil/index', 'id' => 1]); ?>">Проверь себя</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['pupil/index', 'id' => 2]); ?>">Наши достижения</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['pupil/index', 'id' => 3]); ?>">Фильмы о спорте</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['pupil/index', 'id' => 4]); ?>">Интересные факты из мира спорта</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['pupil/index', 'id' => 5]); ?>">Расписание</a></p>
          <span class="fa fa-cog" aria-hidden="true"></span>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="image1 mb-4">
          <h4>Родителям</h4>
          <p class="mt-3"><a href="<?php echo Url::to(['parent/index', 'id' => 0]); ?>">Классный руководитель</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['parent/index', 'id' => 1]); ?>">Дни рождения</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['parent/index', 'id' => 2]); ?>">Расписания</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['parent/index', 'id' => 3]); ?>">Новости класса</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['parent/index', 'id' => 4]); ?>">Портфолио класса</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['parent/index', 'id' => 5]); ?>">Родительские собрания</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['parent/index', 'id' => 6]); ?>">План работы</a></p>
          <span class="fa fa-cog" aria-hidden="true"></span>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mt-md-0 mt-4">
        <div class="image1 mb-4">
          <h4>Педагогам</h4>
          <p class="mt-3"><a href="<?php echo Url::to(['teacher/index', 'id' => 0]); ?>">Уроки</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['teacher/index', 'id' => 1]); ?>">Внеклассная работа</a></p>
          <p class="mt-3"><a href="<?php echo Url::to(['teacher/index', 'id' => 2]); ?>">ФГОС материалы</a></p>
          <span class="fab fa-accusoft"></span>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo Url::base().'/'; ?>images/img/03.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo Url::base().'/'; ?>images/img/04.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section>
  <div class="album py-5 bg-light cont_news">
    <div class="container">
      <div class="fresh-news-header all-block-header row">
        <div class="fresh-news-title kids-title col-md-12"><h2 class="h2_main">Свежие новости</h2></div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>images/img/02.jpg" data-holder-rendered="true">
            <div class="card-body">
              <p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>