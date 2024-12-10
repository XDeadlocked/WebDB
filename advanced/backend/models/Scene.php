<?php

namespace backend\models;

use Yii;
/*
    public $SceneID;
    public $SceneName;
    public $TargetAudience;
    public $Overview;
    public $ReleatedTech;
    public $Challenges;
    public $FuturePotential;
*/
/**
 * This is the model class for table "Scene".
 *
    * @property int $SceneID
    * @property string|null $SceneName
    * @property string|null $TargetAudience
    * @property string|null $Overview
    * @property string|null $ReleatedTech
    * @property string|null $Challenges
    * @property string|null $FuturePotential
 */
/**
 * team: 我说的队
 * Coding by 许宸
 * 应用场景 model 表单
 */
class Scene extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scene';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SceneID'], 'required'],
            [['SceneID'], 'integer'],
            [['SceneName', 'TargetAudience', 'Overview', 'ReleatedTech', 'Challenges', 'FuturePotential'], 'string'],
            [['SceneID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
}
