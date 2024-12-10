<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="domain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DomainID')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'DomainName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Tech')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Application')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'References')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
