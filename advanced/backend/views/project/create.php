<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 工程应用 创建表单
 */

use yii\helpers\Html;

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
