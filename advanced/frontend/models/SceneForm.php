<?php
/**
 * team:我说的队
 * Coding by 许宸
 * 前沿研究 model表单
 */

namespace app\models;

use yii\base\Model;

class SceneForm extends Model
{

    public $SceneID;
    public $SceneName;
    public $TargetAudience;
    public $Overview;
    public $ReleatedTech;
    public $Challenges;
    public $FuturePotential;

    public function rules()
    {
        return [
            [['SceneID'], 'required'],
            [['SceneID'], 'integer'],
            [['SceneName', 'TargetAudience', 'Overview', 'ReleatedTech', 'Challenges', 'FuturePotential'], 'string'],
            [['SceneID'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'SceneID' => 'Sceneid',
            'SceneName' => 'Scene Name',
            'TargetAudience' => 'Target Audience',
            'Overview' => 'Overview',
            'ReleatedTech' => 'Releated Tech',
            'Challenges' => 'Challenges',
            'FuturePotential' => 'Future Potential',
        ];
    }

    // 保存数据到数据库
    public function save($SceneID = null)
    {
        $scene = $SceneID ? Scene::findOne($SceneID) : new Scene();
        if ($scene) {
            $scene->SceneID = $this->SceneID;
            $scene->SceneName = $this->SceneName;
            $scene->TargetAudience = $this->TargetAudience;
            $scene->Overview = $this->Overview;
            $scene->ReleatedTech = $this->ReleatedTech;
            $scene->Challenges = $this->Challenges;
            $scene->FuturePotential = $this->FuturePotential;
            return $scene->save();
        }

        return false;
    }
}