<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 管理员表 搜索表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="administrator-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Aid') ?>
    <?= $form->field($model, 'Aname') ?>
    <?= $form->field($model, 'Apassword') ?>
    <?= $form->field($model, 'Amail') ?>

    <?php // echo $form->field($model, 'references') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
