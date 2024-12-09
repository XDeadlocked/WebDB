<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 留言板 表单
 */
namespace frontend\models;

use Yii;
use yii\base\Model;

class DiscussionForm extends Model
{
    public $Dtext;

    public function rules()
    {
        return [
            [['Dtext'], 'required'],
            [['Dtext'], 'string', 'max' => 255],
        ];
    }
}