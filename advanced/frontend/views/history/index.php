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
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    /* 设置背景图片样式 */
    body {
        background-image: url('<?= \yii\helpers\Url::to('../web/image/history.jpg') ?>'); /* 使用 Yii 的 Url::to() 方法生成路径 */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* 固定背景图 */
    }

    .history-index {
        /* 内容区域样式，添加半透明背景 */
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* 增加文字颜色对比度 */
    .history-index h1, .history-index th, .history-index td {
        color: #000; /* 黑色文字 */
    }

    /* 表格头部样式 */
    .history-index .table-dark {
        background-color: rgba(255, 255, 255, 0.9); /* 白色背景 */
        color: #000; /* 黑色文字 */
        border-bottom: 2px solid #ddd; /* 添加底部边框 */
    }

    /* 表格单元格样式 */
    .history-index .table-bordered td {
        border-color: #000; /* 设置表格边框颜色为黑色 */
    }

    /* 表格头部背景颜色与表格背景颜色一致 */
    .history-index .table-dark th {
        background-color: rgba(255, 255, 255, 0.9); /* 表格头背景为半透明白色 */
        color: #000; /* 黑色文字 */
    }
</style>

<div class="container mt-5">
    <h1 class="text-center mb-4"><?= $this->title ?></h1>

    <!-- 历史事件表格 -->
    <div class="table-responsive history-index">
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
