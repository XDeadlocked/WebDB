<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 留言板 model
 */

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Discussion extends ActiveRecord
{
    public static function tableName()
    {
        return 'discussion';
    }

}