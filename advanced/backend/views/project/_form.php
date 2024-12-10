<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 工程应用 表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'ProjectName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Background')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Goal')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Tech')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Effect')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
