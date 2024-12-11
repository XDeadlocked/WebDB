<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 小组成员信息 view
 */

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $members app\models\Member[] */

$this->title = 'Members';
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    <style>
        body {
            background-image: url('../web/image/member_index.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="member-index">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= ListView::widget([
                'dataProvider' => new \yii\data\ArrayDataProvider([
                    'allModels' => $members,
                    'key' => 'Mid',
                ]),
                'itemView' => '_memberView', // 指定itemView文件
                'layout' => "{items}\n<div class='text-center'>{pager}</div>",
            ]); ?>
        </div>
    </div>
</body>
</html>