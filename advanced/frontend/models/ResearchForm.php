<?php
/**
 * team:我说的队
 * Coding by 许宸
 * 前沿研究 model表单
 */

namespace app\models;

use yii\base\Model;

class ResearchForm extends Model
{
 /* * @property int $ResearchID
 * @property string|null $PaperTitle
 * @property string|null $Authors
 * @property string|null $Conference
 * @property int|null $Year
 * @property int|null $SceneID
 * @property string|null $Link
 * */
    public $ResearchID;
    public $PaperTitle;
    public $Authors;
    public $Conference;
    public $Year;
    public $SceneID;
    public $Link;

    public function rules()
    {
        return [
            [['ResearchID'], 'required'],
            [['ResearchID', 'Year', 'SceneID'], 'integer'],
            [['PaperTitle', 'Authors', 'Conference', 'Link'], 'string'],
            [['ResearchID'], 'unique'],
        ];
    }

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

    // 保存数据到数据库
    public function save($SceneID = null)
    {
        $research = $ResearchID ? Research::findOne($ResearchID) : new Research();
        if ($research) {
            $research->ResearchID = $this->ResearchID;
            $research->PaperTitle = $this->PaperTitle;
            $research->Authors = $this->Authors;
            $research->Conference = $this->Conference;
            $research->Year = $this->Year;
            $research->SceneID = $this->SceneID;
            $research->Link = $this->Link;

            return $research->save();
        }

        return false;
    }
}