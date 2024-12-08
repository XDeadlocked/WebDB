<?php
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $histories frontend\models\History[] */
/* @var $pagination yii\data\Pagination */
/**
 * team:我说的队
 * Coding by 胡文馨 2211989,20241209
 * 发展历史主页
 */
$this->title = '发展史';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4"><?= $this->title ?></h1>

    <!-- 历史事件表格 -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>年份</th>
                    <th>事件标题</th>
                    <th>事件描述</th>
                    <th>技术影响</th>
                    <th>参考链接</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($histories as $history): ?>
                    <tr>
                        <td><?= $history->year ?></td>
                        <td><?= $history->event_title ?></td>
                        <td><?= $history->event_description ?></td>
                        <td><?= $history->technology_impact ?></td>
                        <td>
                            <a href="<?= $history->references ?>" target="_blank" class="btn btn-primary btn-sm">链接</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- 分页 -->
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
