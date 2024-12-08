<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 创建新项目
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectForm */

$this->title = '创建新项目';
$this->params['breadcrumbs'][] = ['label' => '项目列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'ProjectName')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Background')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Goal')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Tech')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'Effect')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('提交', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>