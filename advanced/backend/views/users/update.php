<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241211
 * 用户管理更新页面视图
 */
$this->title = 'Update Users: ' . $model->Uid;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Uid, 'url' => ['view', 'Uid' => $model->Uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
