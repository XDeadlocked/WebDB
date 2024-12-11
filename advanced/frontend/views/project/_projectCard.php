<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 工程应用主页卡片视图
 */

/**
 * 单个项目的卡片视图
 */
use yii\helpers\Html;

/* @var $model app\models\Project */
?>

<div class="card d-flex flex-row w-100">
    <div class="card-body d-flex flex-grow-1">
        <div class="me-3">
            <!-- 如果有图片，可以在这里放置 -->
            <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
        </div>
        <div class="d-flex flex-column justify-content-between">
            <div>
                <h5 class="card-title"><?= Html::encode($model->ProjectName) ?></h5>
                <p class="card-text"><strong>背景:</strong> <?= Html::encode($model->Background) ?></p>
                <p class="card-text"><strong>目标:</strong> <?= Html::encode($model->Goal) ?></p>
                <p class="card-text"><strong>技术:</strong> <?= Html::encode($model->Tech) ?></p>
                <p class="card-text"><strong>效果:</strong> <?= Html::encode($model->Effect) ?></p>
            </div>
            <div class="mt-2">
                <small class="text-muted">ID: <?= Html::encode($model->ID) ?></small>
            </div>
        </div>
    </div>
</div>