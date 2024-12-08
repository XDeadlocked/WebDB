<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 小组成员信息 view
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $members app\models\Member[] */

$this->title = 'Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-index">

<h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'dataProvider' => new \yii\data\ArrayDataProvider([
        'allModels' => $members,
        'key' => 'Mid',
    ]),
    'columns' => [
        'Mid',
        'Mname',
        'Mnumber',
        'Mprofession',
        // 自定义 Mlink 列以显示为可点击链接
        [
            'attribute' => 'Mlink',
            'format' => 'raw', // 确保内容不被HTML转义
            'value' => function ($model) {
                return Html::a($model->Mlink, $model->Mlink, ['target' => '_blank']);
            },
        ],
        'Mgroup',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>

</div>