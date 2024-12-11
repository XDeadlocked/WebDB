<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/* @var $form yii\widgets\ActiveForm */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241211
 * 用户管理表单视图
 */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Uname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Upassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Umail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
