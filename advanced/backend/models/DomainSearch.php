<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 model 搜索
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Project;

class DomainSearch extends Domain
{
    public function rules()
    {
        return [
            [['DomainID', 'DomainName', 'Description', 'Tech', 'Application', 'References'], 'safe'],
            [['DomainName'], 'string', 'max' => 255],
            [['DomainID'], 'integer'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Domain::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'DomainID' => $this->DomainID,
        ]);

        $query->andFilterWhere(['like', 'DomainName', $this->DomainName]);

        return $dataProvider;
    }
}
