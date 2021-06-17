<?php

/* @var $this yii\web\View */

$this->title = 'Админка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-admin">

<div class="container marketing">

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>Материалы</h2>
      <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Редактировать</button>', ['/materials/index'])?>
    </div>
    <div class="col-md-4">
      <h2>Категории</h2>
      <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Редактировать</button>', ['/category/index'])?>
   </div>
    <div class="col-md-4">
      <h2>Модули</h2>
      <?= \yii\helpers\Html::a('<button class="btn btn-default" type="button">Редактировать</button>', ['/moduls/index'])?>
    </div>
  </div>
</div>

    </div>
    
</div>
