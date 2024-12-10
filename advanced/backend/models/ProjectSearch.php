<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 工程应用 model 搜索
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Project;

class ProjectSearch extends Project
{
    public function rules()
    {
        return [
            [['ID', 'ProjectName', 'Background', 'Goal', 'Tech', 'Effect'], 'safe'],
            [['ProjectName'], 'string', 'max' => 255],
            [['ID'], 'integer'],
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
            'ID' => $this->ID,
        ]);

        $query->andFilterWhere(['like', 'ProjectName', $this->ProjectName]);

        return $dataProvider;
    }
}
