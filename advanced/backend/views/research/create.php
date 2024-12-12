<?php
/**
 * team: 我说的队
 * Coding by xc
 * 应用场景 创建表单
 */

use yii\helpers\Html;

$this->title = 'Create Research';
$this->params['breadcrumbs'][] = ['label' => 'Researchs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="research-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
