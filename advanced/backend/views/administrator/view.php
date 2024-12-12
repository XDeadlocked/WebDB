<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 详细页面视图
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->Aid;
$this->params['breadcrumbs'][] = ['label' => 'Administrator', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="administrator-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Aid' => $model->Aid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Aid' => $model->Aid], [
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
            'Aid',
            'Aname',
            'Apassword',
            'Amail',
        ],
    ]) ?>

</div>
