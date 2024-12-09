<?php
/**
 * team:我说的队
 * Coding by 胡文馨 2211989,20241209
 * 发展历史 model表单
 */
namespace frontend\models;

use yii\db\ActiveRecord;

class History extends ActiveRecord
{
    /**
     * 定义表名
     */
    public static function tableName()
    {
        return 'history'; // 数据库表名
    }
}
