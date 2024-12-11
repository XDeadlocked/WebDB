<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 小组成员 主view
 */
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $members array */
/* @var $pagination yii\data\Pagination */

$this->title = 'Members';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Member', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => new \yii\data\ArrayDataProvider([
        'allModels' => $members,
        'pagination' => $pagination,
        'sort' => [
            'attributes' => ['Mid', 'Mname', 'Mnumber', 'Mgroup', 'Mlink', 'Mprofession'],
        ],
    ]),
    'columns' => [
        'Mid',
        'Mname',
        'Mnumber',
        'Mgroup',
        'Mlink',
        'Mprofession',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>