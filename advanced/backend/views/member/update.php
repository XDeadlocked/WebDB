<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 小组成员 更新view
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberForm */
/* @var $form ActiveForm */
?>

<h1>Update Member</h1>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Mid')->textInput(['readonly' => true]) ?>
    <?= $form->field($model, 'Mname') ?>
    <?= $form->field($model, 'Mnumber') ?>
    <?= $form->field($model, 'Mgroup') ?>
    <?= $form->field($model, 'Mlink') ?>
    <?= $form->field($model, 'Mprofession') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>