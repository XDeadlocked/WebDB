<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 展示小组成员信息
 */

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Member extends ActiveRecord
{
    public static function tableName()
    {
        return 'members';
    }

}