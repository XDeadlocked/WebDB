<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 小组成员信息 表单模型
 */

namespace frontend\models;

use Yii;
use yii\base\Model;

class MemberForm extends Model
{
    public $mid;
    public $mname;
    public $mnumber;
    public $mprofession;
    public $mlink;
    public $mgroup;

    public function rules()
    {
        return [
            [['mid', 'mname', 'mnumber', 'mprofession', 'mlink', 'mgroup'], 'safe'],
        ];
    }
}