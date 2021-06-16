<?php

/* @var $this yii\web\View */

$this->title = 'Модуль 4: дизайн упаковки';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-module4">

<hr class="featurette-divider">

    <div class="container marketing">

    <div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Модуль 4<br><span class="text-muted">Дизайн упаковки</span></h2>
  </div>
  <div class="col-md-5">
  <p class="lead">Дизайн упаковки — это один из мощнейших маркетинговых инструментов продвижения, определенный канал коммуникации между производителем и его целевой аудиторией. Чем привлекательнее оформлен товар, тем большим спросом он будет пользоваться. Хитрый ход способен значительно увеличить процент продаж, ведь это общеизвестный факт, что красивая, яркая, броская тара способствует тому, что его будут как обдуманно, так и спонтанно покупать. Каждый мельчайший элемент должен быть проработан и продуман, ведь важно создать его таким, чтобы он работал на бренд, его успешность.</p>
  </div>
</div>

<hr class="featurette-divider">

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
        <img class="img_m" src="img/m4_1.png" alt="">
          <h2>Учебные пособия</h2>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', [''])?>
        </div>
        <div class="col-md-4">
          <img class="img_m" src="img/m4_2.png" alt="">
          <h2>Тренировачные задания</h2>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', [''])?>
       </div>
        <div class="col-md-4">
          <img class="img_m" src="img/m4_3.png" alt="">
          <h2>Тест</h2>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Пройдти тест</button>', ['/site/tests'])?>
        </div>
        <div class="col-md-4">
          <img class="img_m" src="img/m4_4.png" alt="">
          <h2>Уроки</h2>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', [''])?>
        </div>
      </div>
    </div> <!-- /container -->

    </div>
    
</div>
