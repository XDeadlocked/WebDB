<?php
/**
 * team: 我说的队
 * Coding by xc
 * 应用场景 表单视图
 */
 /*
    * @property int $SceneID
    * @property string|null $SceneName
    * @property string|null $TargetAudience
    * @property string|null $Overview
    * @property string|null $RelatedTech
    * @property string|null $Challenges
    * @property string|null $FuturePotential
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="scene-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SceneID')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'SceneName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'TargetAudience')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Overview')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'RelatedTech')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Challenges')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'FuturePotential')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>