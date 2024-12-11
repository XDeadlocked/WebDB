<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 工程应用 搜索表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>
    <?= $form->field($model, 'ProjectName') ?>
    <?= $form->field($model, 'Background') ?>
    <?= $form->field($model, 'Goal') ?>
    <?= $form->field($model, 'Tech') ?>
    <?= $form->field($model, 'Effect') ?>

    <?php // echo $form->field($model, 'references') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
