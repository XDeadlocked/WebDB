<?php
/**
 * team:我说的队
 * Coding by 许宸, 2110598
 * 前沿研究主页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '前沿研究';
$this->params['breadcrumbs'][] = $this->title;


//自定义函数：将文本中的 URL 转换为可点击的超链接
function makeLinksClickable($text) {
    // 正则表达式匹配 URL
    return preg_replace(
        '/(http[s]?:\/\/[^\s<"]+)/i',
        '<a href="$1" target="_blank">$1</a>',
        $text
    );
}

?>
<div class="container mt-5">
    <h1 class="text-center mb-4"><?= $this->title ?></h1>

    <!-- 历史事件表格 -->
    <div class="table-responsive">
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


<style>
    .lunbo {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        overflow: hidden;
    }

    .lb-content {
        position: relative;
    }

    .lb-items {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .lb-item {
        min-width: 100%;
        flex: 0 0 100%;
        display: none;
    }

    .lb-item.active {
        display: block;
    }

    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 24px;
    }

    .carousel-control.prev {
        left: -25px;
    }

    .carousel-control.next {
        right: -25px;
    }

    .carousel-indicators {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .circle {
        width: 10px;
        height: 10px;
        background-color: #ccc;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
    }

    .circle.active {
        background-color: #333;
    }

    .domain-item {
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%; /* 使内容宽度为100% */
        margin: 0 auto; /* 居中内容 */
    }

    .domain-name {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .domain-description {
        font-style: italic;
        margin-bottom: 10px;
    }

    .domain-details {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .domain-tech, .domain-application, .domain-references {
        flex: 1 1 300px;
    }

    .domain-references ul {
        list-style-type: disc;
        padding-left: 20px;
    }

    hr {
        border: none;
        border-top: 1px solid #ccc;
        margin: 20px 0;
    }
</style>
