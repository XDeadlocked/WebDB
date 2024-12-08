<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 工程应用 model数据库交互
 */

namespace app\models;

use yii\db\ActiveRecord;

class Project extends ActiveRecord
{
    public static function tableName()
    {
        return 'project';
    }

    public static function primaryKey()
    {
        return ['ID']; // 确保主键名称正确
    }

    // 定义规则
    public function rules()
    {
        return [
            [['ID', 'ProjectName', 'Background', 'Goal', 'Tech', 'Effect'], 'safe'],
            [['ProjectName'], 'string', 'max' => 255],
            [['ID'], 'integer'],
        ];
    }

    // 定义标签
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