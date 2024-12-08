<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\History */
/* @var $form yii\widgets\ActiveForm */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 发展历史表单视图
 */
?>

<div class="history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'event_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'technology_impact')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'references')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
