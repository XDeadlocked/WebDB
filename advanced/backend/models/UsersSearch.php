<?php
/**
 * Team: 我说的队
 * Coding by 胡文馨 2211989, 20241211
 * 用户搜索 model
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Users;

/**
 * UsersSearch represents the model behind the search form of `backend\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Uid'], 'integer'],
            [['Uname', 'Upassword', 'Umail'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Users::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Uid' => $this->Uid,
        ]);

        $query->andFilterWhere(['like', 'Uname', $this->Uname])
            ->andFilterWhere(['like', 'Upassword', $this->Upassword])
            ->andFilterWhere(['like', 'Umail', $this->Umail]);

        return $dataProvider;
    }
}
