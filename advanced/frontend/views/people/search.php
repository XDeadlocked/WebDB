<?php
/* @var $this yii\web\View */
/* @var $people frontend\models\People[] */
/* @var $keyword string */
/**
 * team:我说的队
 * Coding by 胡文馨 2211989,20241208
 * 领军人物主页
 */
$this->title = '搜索结果';
?>

<style>
    /* 设置背景图片样式 */
    body {
        background-image: url('<?= \yii\helpers\Url::to('../web/image/search_results.jpg') ?>'); /* 使用 Yii 的 Url::to() 方法生成路径 */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* 固定背景图 */
    }

    .search-results {
        /* 添加半透明背景样式 */
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* 表格文字颜色和样式 */
    .search-results h1, .search-results th, .search-results td {
        color: #000; /* 黑色文字 */
    }

    /* 表格头部样式 */
    .search-results .table-dark {
        background-color: rgba(255, 255, 255, 0.9); /* 半透明白色背景 */
        color: #000; /* 黑色文字 */
        border-bottom: 2px solid #ddd; /* 添加底部边框 */
    }

    /* 表格单元格样式 */
    .search-results .table-bordered td {
        border-color: #000; /* 设置表格边框颜色为黑色 */
    }

    /* 表格头部背景颜色与表格背景颜色一致 */
    .search-results .table-dark th {
        background-color: rgba(255, 255, 255, 0.9); /* 表格头背景为半透明白色 */
        color: #000; /* 黑色文字 */
    }

    /* 搜索框样式 */
    .search-box .input-group {
        max-width: 600px;
        margin: 0 auto;
    }

    .search-box input {
        border: 2px solid #ddd;
        border-radius: 0;
    }

    .search-box button {
        border-radius: 0;
    }
</style>

<div class="container mt-5">
    <h1 class="text-center mb-4"><?= $this->title ?></h1>

    <!-- 搜索框 -->
    <div class="search-box mb-4">
        <form method="get" action="index.php">
            <input type="hidden" name="r" value="people/search">
            <div class="input-group">
                <input type="text" name="keyword" value="<?= htmlspecialchars($keyword ?? '') ?>" class="form-control" placeholder="输入关键字搜索">
                <button type="submit" class="btn btn-primary">搜索</button>
            </div>
        </form>
    </div>

    <!-- 搜索结果表格 -->
    <div class="table-responsive search-results">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>生卒年</th>
                    <th>国籍</th>
                    <th>领域</th>
                    <th>贡献</th>
                    <th>参考链接</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($people)): ?>
                    <tr>
                        <td colspan="7" class="text-center">未找到相关人物。</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($people as $person): ?>
                        <tr>
                            <td><?= $person->id ?></td>
                            <td class="fw-bold"><?= $person->name ?></td>
                            <td><?= $person->birth_and_death_year ?></td>
                            <td><?= $person->nationality ?></td>
                            <td><?= $person->field ?></td>
                            <td><?= $person->contributions ?></td>
                            <td><a href="<?= $person->references ?>" target="_blank" class="btn btn-primary btn-sm">链接</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
