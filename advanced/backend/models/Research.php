<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Research".
 *
 * @property int $ResearchID
 * @property string|null $PaperTitle
 * @property string|null $Authors
 * @property string|null $Conference
 * @property int|null $Year
 * @property int|null $SceneID
 * @property string|null $Link
 */
/**
 * team: 我说的队
 * Coding by 许宸
 * 前沿研究 model 表单
 */
class Research extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'research';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ResearchID'], 'required'],
            [['ResearchID', 'Year', 'SceneID'], 'integer'],
            [['PaperTitle', 'Authors', 'Conference', 'Link'], 'string'],
            [['ResearchID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ResearchID' => 'ResearchID',
            'PaperTitle' => 'Paper Title',
            'Authors' => 'Authors',
            'Conference' => 'Conference',
            'Year' => 'Year',
            'SceneID' => 'Scene ID',
            'Link' => 'Link',
        ];
    }
}
