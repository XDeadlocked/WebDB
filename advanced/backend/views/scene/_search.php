<?php
/**
 * team: 我说的队
 * Coding by xc
 * 应用场景 搜索表单视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="scene-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SceneID') ?>
    <?= $form->field($model, 'SceneName') ?>
    <?= $form->field($model, 'TargetAudience') ?>
    <?= $form->field($model, 'Overview') ?>
    <?= $form->field($model, 'ReleatedTech') ?>
    <?= $form->field($model, 'Challenges') ?>
    <?= $form->field($model, 'FuturePotential') ?>

    <?php // echo $form->field($model, 'references') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
