<?php
/**
 * team: 我说的队
 * Coding by 许宸
 * 应用场景 列表视图
 */

 /*
    * @property int $SceneID
    * @property string|null $SceneName
    * @property string|null $TargetAudience
    * @property string|null $Overview
    * @property string|null $ReleatedTech
    * @property string|null $Challenges
    * @property string|null $FuturePotential
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = '应用场景列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scene-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建新应用场景', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SceneID',
            'SceneName',
            'TargetAudience',
            'Overview',
            'ReleatedTech',
            'Challenges',
            'FuturePotential',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'SceneID' => $model->SceneID]);
                 }
            ],
        ],
    ]); ?>


</div>

