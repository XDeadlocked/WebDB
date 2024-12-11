<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 留言板 更新view
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiscussionForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discussion-update">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Dtext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ddate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>