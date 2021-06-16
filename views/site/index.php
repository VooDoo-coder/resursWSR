<?php

/* @var $this yii\web\View */

$this->title = 'Главная';
?>
<div class="site-index">

     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/carousel1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/carousel2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/carousel3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

       <!-- START THE FEATURETTES -->


<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Молодые Профессионалы <span class="text-muted">WorldSkills</span></h2>
    <p class="lead">WORLDSKILLS – ЭТО МЕЖДУНАРОДНОЕ НЕКОММЕРЧЕСКОЕ ДВИЖЕНИЕ, ЦЕЛЬЮ КОТОРОГО ЯВЛЯЕТСЯ ПОВЫШЕНИЕ ПРЕСТИЖА ПРОФЕССИОНАЛЬНОГО МАСТЕРСТВА И РАЗВИТИЕ ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ ПУТЕМ ГАРМОНИЗАЦИИ ЛУЧШИХ ПРАКТИК И СТАНДАРТОВ ВО ВСЕМ МИРЕ ПОСРЕДСТВОМ ОРГАНИЗАЦИИ И ПРОВЕДЕНИЯ ЧЕМПИОНАТОВ КАК В КАЖДОЙ ОТДЕЛЬНОЙ СТРАНЕ, ТАК И ВО ВСЕМ МИРЕ В ЦЕЛОМ.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive center-block" src="https://www.agrobase.ru/uploads/publications/2018/08/15/95108c419.jpg" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 col-md-push-5">
    <h2 class="featurette-heading">ВорлдСкиллс Россия<span class="text-muted"></span></h2>
    <p class="lead">центр совершенствования и развития навыков мастерства. Благодаря международному сотрудничеству и развитию связей между производствами, правительствами, организациями и институтами мы показываем преимущества и необходимость в квалифицированных специалистах через проведение соревнований, организацию совместных проектов и обмена опытом. Мы подчеркиваем важность профессиональной подготовки и обучения для молодежи, промышленности и общества, помогаем молодым специалистам стать лучшими в выбранной ими профессии.</p>
  </div>
  <div class="col-md-5 col-md-pull-7">
    <img class="featurette-image img-responsive center-block" src="https://edu.ascon.ru/source/news/1820/1.jpg" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Графический дизайн 16-22<span class="text-muted"></span></h2>
  </div>
  <div class="col-md-5">
  <p class="lead">Данная компетенция объединяет множество разнообразных навыков и знаний, включая художественный дизайн, обработку фотографий и иллюстраций, оформление текстов, верстку и печать страниц. Работы проводятся с целью создания графического макета для онлайн публикаций (цифровая версия) и печатного издания.
Сфера деятельности графического дизайнера включает корпоративный брендинг (логотип, буклеты, каталоги, визитки, упаковочные материалы), разработку рекламных щитов, вывесок, билбордов и навигационных схем, оформление выставок и витрин, верстку многостраничных печатных изданий, веб-страниц и многое другое.</p>
  </div>
</div>

<hr class="featurette-divider">

<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <img class="img_m" src="img/m1.png" alt="">
          <h2>Модуль 1</h2>
          <p>Корпоративный дизайн</p>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', [''])?>
        </div>
        <div class="col-md-4">
          <img class="img_m" src="img/m2.png" alt=""> 
          <h2>Модуль 2</h2>
          <p>Информационный дизайн</p>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', [''])?>
       </div>
        <div class="col-md-4">
          <img class="img_m" src="img/m3.png" alt="">
          <h2>Модуль 3</h2>
          <p>Многостраничный дизайн</p>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', [''])?>
        </div>
        <div class="col-md-4">
          <img class="img_m" src="img/m4.png" alt="">
          <h2>Модуль 4</h2>
          <p>Дизайн упаковки</p>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', ['/site/module4'])?>
          <!-- <p><a class="btn btn-default" href="http://resurswsr/web/index.php?r=site%2Fmodule4" role="button">View details &raquo;</a></p> -->
        </div>
      </div>
    </div> <!-- /container -->
 
    <hr class="featurette-divider">


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/web/js/jquery.min.js"><\/script>')</script>
    <script src="/web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/web/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/web/js/ie10-viewport-bug-workaround.js"></script>

    </div>
</div>
