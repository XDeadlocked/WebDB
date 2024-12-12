
<?php
/**
 * team: 我说的队
 * Coding by xc
 * 前沿研究 更新页面
 */

use yii\helpers\Html;

$this->title = '更新前沿研究: ' . $model->ResearchID;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ResearchID, 'url' => ['view', 'ResearchID' => $model->ResearchID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
