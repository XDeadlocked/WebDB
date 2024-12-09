<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\People */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 人物管理更新页面视图
 */
$this->title = 'Update People: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="people-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
