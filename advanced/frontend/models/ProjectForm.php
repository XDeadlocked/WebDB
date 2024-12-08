<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 工程应用 model表单
 */

 namespace app\models;

use yii\base\Model;

class ProjectForm extends Model
{
    public $ID;
    public $ProjectName;
    public $Background;
    public $Goal;
    public $Tech;
    public $Effect;

    public function rules()
    {
        return [
            [['ProjectName', 'Background', 'Goal', 'Tech', 'Effect'], 'required'],
            [['ProjectName'], 'string', 'max' => 255],
            [['Background', 'Goal', 'Tech', 'Effect'], 'string'],
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

    // 保存数据到数据库
    public function save($id = null)
    {
        $project = $id ? Project::findOne($id) : new Project();
        
        if ($project) {
            $project->ID = $this->ID;
            $project->ProjectName = $this->ProjectName;
            $project->Background = $this->Background;
            $project->Goal = $this->Goal;
            $project->Tech = $this->Tech;
            $project->Effect = $this->Effect;

            return $project->save();
        }

        return false;
    }
}