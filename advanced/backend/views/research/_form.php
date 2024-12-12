<?php
/**
 * team: 我说的队
 * Coding by xc
 * 前沿研究 表单视图
 */
 /*
 * @property int $ResearchID
 * @property string|null $PaperTitle
 * @property string|null $Authors
 * @property string|null $Conference
 * @property int|null $Year
 * @property int|null $SceneID
 * @property string|null $Link
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="research-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ResearchID')->textInput() ?>
    <?= $form->field($model, 'PaperTitle')->textInput() ?>
    <?= $form->field($model, 'Authors')->textInput() ?>
    <?= $form->field($model, 'Conference')->textInput() ?>
    <?= $form->field($model, 'Year')->textInput() ?>
    <?= $form->field($model, 'SceneID')->textInput() ?>
    <?= $form->field($model, 'Link')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>