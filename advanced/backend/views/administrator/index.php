<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 管理员表 列表视图
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = '管理员列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrator-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建新管理员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Aid',
            'Aname',
            'Apassword',
            'Amail',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Aid' => $model->Aid]);
                 }
            ],
        ],
    ]); ?>


</div>
