<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 留言板 视图
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider array */
/* @var $model app\models\DiscussionForm */

$this->title = '留言板';
?>

<!-- 引用自定义CSS -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        background-image: url('../web/image/discussion_index.jpg'); /* 添加本地背景图 */
        background-size: cover; /* 背景图覆盖整个页面 */
        background-position: center; /* 背景图居中 */
        background-repeat: no-repeat; /* 防止背景图重复 */
        background-attachment: fixed; /* 固定背景图 */
    }
    .container {
        margin-top: 20px;
    }
    .card {
        margin-bottom: 20px;
        border-radius: 5px;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.5); /* 更高的半透明白色背景 */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* 暗淡阴影 */
    }
    .card-header {
        background-color: rgba(128, 128, 128, 0.7); /* 更高的半透明灰色背景 */
        color: white;
        padding: 10px;
        text-align: center;
    }
    .card-body {
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.5); /* 更浅的半透明白色背景 */
    }
    .post {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.7); /* 更高的半透明白色背景 */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .post p {
        margin: 0 0 5px;
    }
    .post-date {
        display: block;
        font-size: 12px;
        color: #666;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-primary {
        background-color: rgba(128, 128, 128, 0.7); /* 半透明灰色按钮 */
        border-color: rgba(128, 128, 128, 0.9);
        color: white;
        border-radius: 5px;
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'Dtext')->textarea(['rows' => 6, 'class' => 'form-control'])->label('说点什么吧！') ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <h2>大家说：</h2>
            <?php foreach ($dataProvider as $post): ?>
                <div class="post">
                    <p><?= Html::encode($post->Dtext) ?></p>
                    <small class="post-date">Posted on: <?= Html::encode($post->Ddate) ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>