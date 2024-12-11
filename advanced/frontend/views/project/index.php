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

    <?= ListView::widget([
        'dataProvider' => new \yii\data\ArrayDataProvider([
            'allModels' => $projects,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]),
        'itemView' => '_projectCard', // 使用单独视图文件来渲染每个项目
        'options' => ['class' => 'row'], // 确保所有卡片在一个容器中
        'itemOptions' => ['class' => 'col-12 mb-4'], // 每个项目卡片占据整行并有底部间距
        'layout' => "{items}\n{pager}", // 定义布局模板
        'viewParams' => ['projects' => $projects],
    ]); ?>

</div>