<?php
/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241208
 * 涵盖领域 model数据库交互
 */

namespace frontend\models;

use yii\db\ActiveRecord;

class Domain extends ActiveRecord
{
    public static function tableName()
    {
        return 'domains';
    }
}