<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 留言板 表单model
 */
namespace backend\models;

use yii\base\Model;

class DiscussionForm extends Model
{
    public $Did;
    public $Dtext;
    public $Ddate;

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



