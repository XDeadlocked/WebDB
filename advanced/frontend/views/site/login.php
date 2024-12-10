<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f5f5f5;">
    <div style="background: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
        <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>

        <p style="text-align: center; color: #666;">请填写下面的信息来登录：</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal', 'style' => 'margin-top: 20px;'],
            'fieldConfig' => [
                'template' => "<div class=\"form-group\" style=\"margin-bottom: 20px;\">\n{label}\n<div>{input}</div>\n<div>{error}</div>\n</div>",
                'labelOptions' => ['style' => 'font-weight: bold; margin-bottom: 5px; display: block; color: #333;'],
            ],
        ]); ?>

        <?= $form->field($model, 'Uname')->textInput([
            'placeholder' => '输入用户名或邮箱',
            'style' => 'width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;',
        ])->label('用户名或邮箱') ?>

        <?= $form->field($model, 'Upassword')->passwordInput([
            'placeholder' => '输入密码',
            'style' => 'width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;',
        ])->label('密码') ?>

        <div class="form-group" style="text-align: center; margin-top: 20px;">
            <?= Html::submitButton('登录', [
                'class' => 'btn btn-primary',
                'name' => 'login-button',
                'style' => 'padding: 10px 20px; font-size: 16px; background-color: #007bff; border-color: #007bff; border-radius: 5px; color: #fff; width: 100%;',
            ]) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>