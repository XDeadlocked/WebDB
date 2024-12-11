<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 留言板 查看详情view
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Discussion */

$this->title = 'View Discussion: ' . $model->Did;
$this->params['breadcrumbs'][] = ['label' => 'Discussions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="discussion-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Did], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Did], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back to List', ['index'], ['class' => 'btn btn-secondary']) ?>
    </p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td><?= Html::encode($model->Did) ?></td>
        </tr>
        <tr>
            <th>Text</th>
            <td><?= Html::encode($model->Dtext) ?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?= Html::encode($model->Ddate) ?></td>
        </tr>
    </table>

</div>