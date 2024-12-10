<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 搜索表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="domain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DomainID') ?>
    <?= $form->field($model, 'DomainName') ?>
    <?= $form->field($model, 'Description') ?>
    <?= $form->field($model, 'Tech') ?>
    <?= $form->field($model, 'Application') ?>
    <?= $form->field($model, 'References') ?>

    <?php // echo $form->field($model, 'references') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
