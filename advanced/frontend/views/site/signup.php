<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241210
 * 注册 view
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '注册';
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

    .signup-container {
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

<div class="signup-container">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>填写下面的信息来注册：</p>

    <?php $form = ActiveForm::begin([
        'id' => 'form-signup',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
            'labelOptions' => ['style' => 'font-weight: bold; margin-bottom: 5px; display: block; color: #333;'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['placeholder' => '输入用户名']) ?>
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => '输入密码', 'oninput' => 'checkPasswordStrength(this.value)']) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => '输入电子邮箱']) ?>

    <div class="form-group" style="margin-bottom: 20px;">
        <label style="font-weight: bold; color: #333;">密码强度:</label>
        <div style="margin-top: 5px;">
            <div id="password-strength" style="padding: 10px; border-radius: 5px; font-size: 14px; text-align: center;"></div>
        </div>
    </div>

    <div class="form-group" style="text-align: center;">
        <?= Html::submitButton('注册', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <script>
        function checkPasswordStrength(password) {
            let strength = '';
            let score = 0;

            // 检查密码长度
            if (password.length >= 8) score += 1;
            if (password.length >= 6) score += 0.5;

            // 检查大写字母、小写字母、数字、特殊字符
            if (/[A-Z]/.test(password)) score += 1;
            if (/[a-z]/.test(password)) score += 1;
            if (/[0-9]/.test(password)) score += 1;
            if (/[\W_]/.test(password)) score += 1;

            // 根据分数设置强度
            let strengthBar = document.getElementById('password-strength');
            if (score >= 4) {
                strength = '强';
                strengthBar.style.backgroundColor = 'green';
                strengthBar.style.color = 'white';
            } else if (score >= 2) {
                strength = '中';
                strengthBar.style.backgroundColor = 'yellow';
                strengthBar.style.color = 'black';
            } else {
                strength = '弱';
                strengthBar.style.backgroundColor = 'red';
                strengthBar.style.color = 'white';
            }
            strengthBar.innerText = strength;
        }
    </script>
</div>