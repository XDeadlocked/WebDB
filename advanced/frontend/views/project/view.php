<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 展示详细信息
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $project app\models\Project */

$this->title = $project->ProjectName;
$this->params['breadcrumbs'][] = ['label' => '项目列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $project->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $project->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除该项目吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table class="table table-striped table-bordered detail-view">
        <tr><th>项目名称</th><td><?= Html::encode($project->ProjectName) ?></td></tr>
        <tr><th>背景</th><td><?= Html::encode($project->Background) ?></td></tr>
        <tr><th>目标</th><td><?= Html::encode($project->Goal) ?></td></tr>
        <tr><th>技术</th><td><?= Html::encode($project->Tech) ?></td></tr>
        <tr><th>效果</th><td><?= Html::encode($project->Effect) ?></td></tr>
    </table>

</div>