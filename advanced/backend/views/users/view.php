<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241211
 * 用户管理详情页面视图
 */
$this->title = $model->Uid;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Uid' => $model->Uid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Uid' => $model->Uid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Uid',
            'Uname',
            'Upassword',
            'Umail',
        ],
    ]) ?>

</div>
