<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 小组成员 查看详情view
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $member app\models\Member */
?>

<h1>View Member: <?= Html::encode($member->Mname) ?></h1>

<p>
    <?= Html::a('Update', ['update', 'id' => $member->Mid], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $member->Mid], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>
    <?= Html::a('Back to List', ['index'], ['class' => 'btn btn-secondary']) ?>
</p>

<?= DetailView::widget([
    'model' => $member,
    'attributes' => [
        'Mid',
        'Mname',
        'Mnumber',
        'Mgroup',
        'Mlink',
        'Mprofession',
    ],
]) ?>