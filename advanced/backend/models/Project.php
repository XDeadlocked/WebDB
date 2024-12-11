<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 工程应用 model
 */

namespace backend\models;

use Yii;

class Project extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'project';
    }

    public function rules()
    {
        return [
            [['ID', 'ProjectName', 'Background', 'Goal', 'Tech', 'Effect'], 'safe'],
            [['ProjectName'], 'string', 'max' => 255],
            [['ID'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ProjectName' => '项目名称',
            'Background' => '背景',
            'Goal' => '目标',
            'Tech' => '技术',
            'Effect' => '效果',
        ];
    }
}
