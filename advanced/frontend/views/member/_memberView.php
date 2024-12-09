<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 小组成员信息 view格式
 */

use yii\helpers\Html;

?>


<div class="card mb-3" style="background-color: #f8f9fa;">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <strong>姓名：</strong> <?= Html::encode($model->Mname) ?>
            </div>
            <div class="col">
                <p class="card-text"><strong>学号：</strong> <?= Html::encode($model->Mnumber) ?></p>
            </div>
            <div class="col">
            <p class="card-text"><strong>专业：</strong> <?= Html::encode($model->Mprofession) ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <p class="card-text"><strong>个人作业链接：</strong> <a href="<?= Html::encode($model->Mlink) ?>" target="_blank"><?= Html::encode($model->Mlink) ?></a></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="card-text"><strong>组别：</strong> <?= Html::encode($model->Mgroup) ?></p>
            </div>
            <div class="col">
                <p class="card-title"><strong>成员号：</strong> <?= Html::encode($model->Mid) ?></p>
            </div>
        </div>
    </div>
</div>