<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 详细页面视图
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->DomainID;
$this->params['breadcrumbs'][] = ['label' => 'Domains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="domain-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'DomainID' => $model->DomainID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'DomainID' => $model->DomainID], [
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
            'DomainID',
            'DomainName',
            'Description:ntext',
            'Tech:ntext',
            'Application:ntext',
            'References:ntext',
        ],
    ]) ?>

</div>
