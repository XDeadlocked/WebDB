<?php

/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241210
 * 注册 view
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '注册';
?>
<div class="site-signup" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f5f5f5;">
    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
        <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>

        <p style="text-align: center; color: #666;">填写下面的信息来注册：</p>

        <?php $form = ActiveForm::begin([
            'id' => 'form-signup',
            'options' => ['class' => 'form-horizontal', 'style' => 'margin-top: 20px;'],
            'fieldConfig' => [
                'template' => "<div class=\"form-group\" style=\"margin-bottom: 20px;\">\n{label}\n<div>{input}</div>\n<div>{error}</div>\n</div>",
                'labelOptions' => ['style' => 'font-weight: bold; margin-bottom: 5px; display: block; color: #333;'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput([
            'placeholder' => '输入用户名',
            'style' => 'width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;',
        ]) ?>

        <?= $form->field($model, 'password')->passwordInput([
            'oninput' => 'checkPasswordStrength(this.value)',
            'placeholder' => '输入密码',
            'style' => 'width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;',
        ]) ?>

        <div class="form-group" style="margin-bottom: 20px;">
            <label style="font-weight: bold; color: #333;">密码强度:</label>
            <div style="margin-top: 5px;">
                <div id="password-strength" style="padding: 10px; border-radius: 5px; font-size: 14px; text-align: center;"></div>
            </div>
        </div>

        <?= $form->field($model, 'email')->textInput([
            'placeholder' => '输入电子邮箱',
            'style' => 'width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;',
        ]) ?>

        <div class="form-group" style="text-align: center; margin-top: 20px;">
            <?= Html::submitButton('注册', [
                'class' => 'btn btn-primary',
                'name' => 'signup-button',
                'style' => 'padding: 10px 20px; font-size: 16px; background-color: #007bff; border-color: #007bff; border-radius: 5px; color: #fff; width: 100%;',
            ]) ?>
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
</div>
