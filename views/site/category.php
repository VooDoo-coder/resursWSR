<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container marketing">
    <h2 class="sub-header"><?= $model->name?></h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Скачать фаил</th>
                </tr>
            </thead>
            <tbody>

                <? foreach ($item as $item): ?>
                    <tr>
                    <td><?= $item->name?></td>
                    <td><?= $item->description?></td>
                    <td>
                        <?php
                            echo html::a('Скачать',$item->file, ['class'=>'btn btn-primary']);
                        ?>
                    </td>
                    </tr>
                <? endforeach ?>

               
            </tbody>
        </table>
    </div>
</div>