<?php

/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 留言板 主view
 */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Discussions';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Discussion', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'Did',
        'Dtext',
        'Ddate',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);
?>
