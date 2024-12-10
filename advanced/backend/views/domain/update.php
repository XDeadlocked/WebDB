<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 更新页面
 */

use yii\helpers\Html;

$this->title = '更新项目: ' . $model->DomainID;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DomainID, 'url' => ['view', 'DomainID' => $model->DomainID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="domain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
