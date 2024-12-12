<?php
/**
 * team: 我说的队
 * Coding by 许宸
 * 应用场景 列表视图
 */

 /*
 * @property int $ResearchID
 * @property string|null $PaperTitle
 * @property string|null $Authors
 * @property string|null $Conference
 * @property int|null $Year
 * @property int|null $SceneID
 * @property string|null $Link
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = '前沿研究列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="research-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建新前沿研究', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ResearchID',
            'PaperTitle',
            'Authors',
            'Conference',
            'Year',
            'SceneID',
            'Link',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ResearchID' => $model->ResearchID]);
                 }
            ],
        ],
    ]); ?>


</div>

