<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 管理员表 表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="administrator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Aid')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Aname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Apassword')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Amail')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
