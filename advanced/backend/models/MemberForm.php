<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 小组成员 表单model
 */
namespace backend\models;

use yii\base\Model;

class MemberForm extends Model
{
    public $Mid;
    public $Mname;
    public $Mnumber;
    public $Mgroup;
    public $Mlink;
    public $Mprofession;

    public function rules()
    {
        return [
            [['Mid', 'Mname', 'Mnumber', 'Mgroup', 'Mlink', 'Mprofession'], 'required'],
            ['Mid', 'integer'],
            ['Mname', 'string', 'max' => 255],
            ['Mnumber', 'string', 'max' => 50],
            ['Mgroup', 'string', 'max' => 100],
            ['Mlink', 'string', 'max' => 255],
            ['Mprofession', 'string', 'max' => 255],
        ];
    }
}