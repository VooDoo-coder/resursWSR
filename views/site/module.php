<?php

/* @var $this yii\web\View */

$this->title = $model->alt_name;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-module">

    <div class="container marketing">

    <div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading"><?= $model->name?><br><span class="text-muted"><?= $model->alt_name?></span></h2>
  </div>
  <div class="col-md-5">
  <p class="lead"><?= $model->description?></p>
  </div>
</div>

<hr class="featurette-divider">

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <? foreach ($item as $item): ?>

          <div class="col-md-4">
            <img class="img_m" src="<?= $item->img?>" alt="">
            <h2><?= $item->name?></h2>
            <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Материалы</button>', ['/site/category', 'id' => $item->id])?>
          </div>

        <? endforeach ?>


        <div class="col-md-4">
          <img class="img_m" src="img/m4_3.png" alt="">
          <h2>Тест</h2>
          <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Пройдти тест</button>', ['/site/tests'])?>
        </div>

      </div>
    </div> <!-- /container -->

    </div>
    
</div>
