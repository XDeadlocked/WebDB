<?php
/**
 * team: 我说的队
 * Coding by 许宸
 * Scene搜索
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Scene;

class SceneSearch extends Scene
{
    public function rules()
    {
        return [
            [['SceneID'], 'required'],
            [['SceneID'], 'integer'],
            [['SceneName', 'TargetAudience', 'Overview', 'RelatedTech', 'Challenges', 'FuturePotential'], 'string'],
            [['SceneID'], 'unique'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Scene::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'SceneID' => $this->SceneID,
        ]);

        $query->andFilterWhere(['like', 'SceneName', $this->SceneName]);

        return $dataProvider;
    }
}
