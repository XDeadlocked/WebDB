<?php
/* @var $this yii\web\View */
/* @var $people frontend\models\People[] */
/**
 * team:我说的队
 * Coding by 胡文馨 2211989,20241208
 * 领军人物主页
 */
$this->title = '人物介绍';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4"><?= $this->title ?></h1>

    <!-- 搜索按钮 -->
    <div class="text-center mb-4">
        <a href="<?= \yii\helpers\Url::to(['people/search']) ?>" class="btn btn-primary btn-lg">我要检索！</a>
    </div>

    <!-- 人物列表表格 -->
    <div class="table-responsive">
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