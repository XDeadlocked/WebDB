<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\History */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 发展历史创建页面视图
 */
$this->title = 'Create History';
$this->params['breadcrumbs'][] = ['label' => 'Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
