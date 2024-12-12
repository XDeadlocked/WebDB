<?php
/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241208
 * 工程应用主页
 */

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $projects app\models\Project[] */

$this->title = '项目列表';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    /* 仅添加背景图片样式，不改变其他样式 */
    body {
        background-image: url('<?= \yii\helpers\Url::to('../web/image/project.jpg') ?>'); /* 使用 Yii 的 Url::to() 方法 */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* 固定背景图 */
    }

    .project-index {
        /* 确保内容区域有半透明背景，使文字清晰可见 */
        background: rgba(255, 255, 255, 0.9); /* 半透明白色背景 */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

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