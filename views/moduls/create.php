<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Moduls */

$this->title = 'Create Moduls';
$this->params['breadcrumbs'][] = ['label' => 'Moduls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container marketing">
<div class="moduls-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
