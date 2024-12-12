
<?php
/**
 * team: 我说的队
 * Coding by xc
 * 应用场景 更新页面
 */

use yii\helpers\Html;

$this->title = '更新应用场景: ' . $model->SceneID;
$this->params['breadcrumbs'][] = ['label' => 'Scenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SceneID, 'url' => ['view', 'SceneID' => $model->SceneID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
