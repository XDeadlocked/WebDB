<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 管理员表 model 搜索
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Administrator;

class AdministratorSearch extends Administrator
{
    public function rules()
    {
        return [
            [['Aid', 'Aname', 'Apassword', 'Amail'], 'safe'],
            [['Aname'], 'string', 'max' => 255],
            [['Aid'], 'integer'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Administrator::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Aid' => $this->Aid,
        ]);

        $query->andFilterWhere(['like', 'Aname', $this->Aname]);

        return $dataProvider;
    }
}
