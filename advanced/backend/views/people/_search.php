<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PeopleSearch */
/* @var $form yii\widgets\ActiveForm */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 人物管理搜索表单视图
 */
?>

<div class="people-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'birth_and_death_year') ?>

    <?= $form->field($model, 'nationality') ?>

    <?= $form->field($model, 'field') ?>

    <?php // echo $form->field($model, 'contributions') ?>

    <?php // echo $form->field($model, 'references') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
