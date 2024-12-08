<?php
/**
 * team:我说的队
 * Coding by 胡文馨 2211989,20241208
 * 领军人物 model表单
 */
namespace frontend\models;

use yii\db\ActiveRecord;

class People extends ActiveRecord
{
    /**
     * 定义数据库表名
     */
    public static function tableName()
    {
        return 'people'; // 表名为 people
    }
}
