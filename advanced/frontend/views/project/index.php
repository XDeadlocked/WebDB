<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 工程应用主页
 */

 use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $projects app\models\Project[] */

$this->title = '项目列表';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建新项目', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => new \yii\data\ArrayDataProvider([
            'allModels' => $projects,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]),
        'columns' => [
            'ID',
            'ProjectName',
            'Background:ntext',
            'Goal:ntext',
            'Tech:ntext',
            'Effect:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>