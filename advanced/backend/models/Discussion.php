<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 留言板 model
 */

namespace backend\models;

use yii\db\ActiveRecord;

class Discussion extends ActiveRecord
{
    public static function tableName()
    {
        return 'discussion';
    }

    public function rules()
    {
        return [
            [['Dtext'], 'required'],
            [['Ddate'], 'safe'],
            [['Did'], 'integer'],
            [['Dtext'], 'string', 'max' => 255],
        ];
    }
}



