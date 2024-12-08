<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $birth_and_death_year
 * @property string|null $nationality
 * @property string|null $field
 * @property string|null $contributions
 * @property string|null $references
 */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 人物管理 model 表单
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['contributions', 'references'], 'string'],
            [['name', 'field'], 'string', 'max' => 255],
            [['birth_and_death_year'], 'string', 'max' => 50],
            [['nationality'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'birth_and_death_year' => 'Birth And Death Year',
            'nationality' => 'Nationality',
            'field' => 'Field',
            'contributions' => 'Contributions',
            'references' => 'References',
        ];
    }
}
