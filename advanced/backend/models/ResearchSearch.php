<?php
/**
 * team: 我说的队
 * Coding by 许宸
 * 前沿研究搜索
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Project;

class ResearchSearch extends Project
{
    public function rules()
    {
        return [
            [['ResearchID'], 'required'],
            [['ResearchID', 'Year', 'SceneID'], 'integer'],
            [['PaperTitle', 'Authors', 'Conference', 'Link'], 'string'],
            [['ResearchID'], 'unique'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Project::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ResearchID' => $this->ResearchID,
        ]);

        $query->andFilterWhere(['like', 'PaperTitle', $this->PaperTitle]);

        return $dataProvider;
    }
}
