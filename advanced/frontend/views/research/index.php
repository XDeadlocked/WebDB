<?php
/**
 * Team: 我说的队
 * Coding by 许宸, 2110598
 * 前沿研究主页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '前沿研究';
$this->params['breadcrumbs'][] = $this->title;

// 自定义函数：将文本中的 URL 转换为可点击的超链接
function makeLinksClickable($text) {
    // 正则表达式匹配 URL
    return preg_replace(
        '/(http[s]?:\/\/[^\s<"]+)/i',
        '<a href="$1" target="_blank">$1</a>',
        $text
    );
}
?>

<style>
    /* 仅添加背景图片样式，不改变其他样式 */
    body {
        background-image: url('<?= \yii\helpers\Url::to('../web/image/research.jpg') ?>'); /* 使用 Yii 的 Url::to() 方法 */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* 固定背景图 */
    }

    .project-index {
        /* 确保内容区域有半透明背景，使文字清晰可见 */
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* 增加文字颜色对比度 */
    .project-index h1, .project-index th, .project-index td {
        color: #000; /* 设置文字颜色为黑色 */
    }

    /* 设置表格头部为白色背景和黑色文字 */
    .project-index .table-dark {
        background-color: rgba(255, 255, 255, 0.9) /* 白色背景 */
        color: #000; /* 黑色文字 */
        border-bottom: 2px solid #ddd; /* 添加底部边框以增加层次感 */
    }

    /* 增加表格单元格的对比度 */
    .project-index .table-bordered td {
        border-color: #000; /* 设置表格边框颜色为黑色 */
    }

    /* 设置表格头部背景颜色与表格背景颜色一致 */
    .project-index .table-dark th {
        background-color: rgba(255, 255, 255, 0.9); /* 与表格背景颜色一致 */
        color: #000; /* 黑色文字 */
    }
</style>

<div class="container mt-5">
    <h1 class="text-center mb-4"><?= $this->title ?></h1>

    <!-- 历史事件表格 -->
    <div class="table-responsive project-index">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>标题</th>
                    <th>年份</th>
                    <th>会议</th>
                    <th>作者</th>
                    <th>前沿场景</th>
                    <th>链接</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($researchs as $research): ?>
                    <tr>
                        <td><?= $research->PaperTitle ?></td>
                        <td><?= $research->Year ?></td>
                        <td><?= $research->Conference ?></td>
                        <td><?= $research->Authors ?></td>
                        <td><?= $research->scene ? $research->scene->SceneName : '无' ?></td>
                        <td>
                            <a href="<?= $research->Link ?>" target="_blank" class="btn btn-primary btn-sm">链接</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- 分页 -->
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>