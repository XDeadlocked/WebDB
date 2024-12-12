<?php
/**
 * team: 我说的队
 * Coding by xc
 * 应用场景 详细页面视图
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->SceneID;
$this->params['breadcrumbs'][] = ['label' => 'Scenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="scene-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'SceneID' => $model->SceneID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'SceneID' => $model->SceneID], [
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
            'SceneID',
            'SceneName',
            'TargetAudience',
            'Overview',
            'RelatedTech',
            'Challenges',
            'FuturePotential',
        ],
    ]) ?>

</div>
