<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 工程应用主页
 */

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $projects app\models\Project[] */

$this->title = '项目列表';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

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

            [
                'class' => 'yii\grid\Column',
                'content' => function ($model, $key, $index, $column) {
                    return ''; // 空内容
                },
                'header' => '', // 空标题
                'contentOptions' => ['style' => 'width: 50px;'], // 设置宽度
            ],
        ],
    ]); ?>

</div>