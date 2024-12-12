<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 管理员表 更新页面
 */

use yii\helpers\Html;

$this->title = '更新管理员: ' . $model->Aid;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Aid, 'url' => ['view', 'Aid' => $model->Aid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="administrator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
