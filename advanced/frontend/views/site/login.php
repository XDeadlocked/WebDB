<?php
/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 登录 views
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    /* 确保 html 和 body 的高度为 100% */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-image: url('<?= \yii\helpers\Url::to('@web/image/login.jpg') ?>'); /* 使用 Yii 的 Url::to() 方法 */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* 固定背景图 */
    }

    .login-container {
        background: rgba(255, 255, 255, 0.9); /* 半透明白色背景，使内容更清晰 */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    p {
        text-align: center;
        color: #666;
        margin-bottom: 20px;
    }

    .form-horizontal {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
        color: #333;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-primary {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
        color: #fff;
        width: 100%;
    }
</style>

<div class="login-container">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>请填写下面的信息来登录：</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
            'labelOptions' => ['style' => 'font-weight: bold; margin-bottom: 5px; display: block; color: #333;'],
        ],
    ]); ?>

    <?= $form->field($model, 'Uname')->textInput(['placeholder' => '输入用户名或邮箱']) ?>
    <?= $form->field($model, 'Upassword')->passwordInput(['placeholder' => '输入密码']) ?>

    <div class="form-group" style="text-align: center;">
        <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>