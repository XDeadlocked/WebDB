<?php
/**
 * team: 我说的队
 * Coding by xc
 * 应用场景 详细页面视图
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->ResearchID;
$this->params['breadcrumbs'][] = ['label' => 'Researchs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="research-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ResearchID' => $model->ResearchID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ResearchID' => $model->ResearchID], [
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
            'ResearchID',
            'PaperTitle',
            'Authors',
            'Conference',
            'Year',
            'SceneID',
            'Link',
        ],
    ]) ?>

</div>
