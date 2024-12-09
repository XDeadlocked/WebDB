<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\People */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 人物管理创建页面视图
 */
$this->title = 'Create People';
$this->params['breadcrumbs'][] = ['label' => 'Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="people-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
