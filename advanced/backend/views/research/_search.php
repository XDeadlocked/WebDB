<?php
/**
 * team: 我说的队
 * Coding by xc
 * 前沿研究 搜索表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="research-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ResearchID') ?>
    <?= $form->field($model, 'PaperTitle') ?>
    <?= $form->field($model, 'Authors') ?>
    <?= $form->field($model, 'Conference') ?>
    <?= $form->field($model, 'Year') ?>
    <?= $form->field($model, 'SceneID') ?>
    <?= $form->field($model, 'Link') ?>



    <?php // echo $form->field($model, 'references') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
