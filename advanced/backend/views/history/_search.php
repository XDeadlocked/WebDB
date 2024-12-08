<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HistorySearch */
/* @var $form yii\widgets\ActiveForm */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 发展历史搜索表单视图
 */
?>

<div class="history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'event_title') ?>

    <?= $form->field($model, 'event_description') ?>

    <?= $form->field($model, 'technology_impact') ?>

    <?php // echo $form->field($model, 'references') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
