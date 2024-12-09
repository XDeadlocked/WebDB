<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property int|null $year
 * @property string|null $event_title
 * @property string|null $event_description
 * @property string|null $technology_impact
 * @property string|null $references
 */
/**
 * team: 我说的队
 * Coding by 胡文馨 2211989, 20241209
 * 发展历史 model 表单
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'year'], 'integer'],
            [['event_description', 'technology_impact', 'references'], 'string'],
            [['event_title'], 'string', 'max' => 255],
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
            'year' => 'Year',
            'event_title' => 'Event Title',
            'event_description' => 'Event Description',
            'technology_impact' => 'Technology Impact',
            'references' => 'References',
        ];
    }
}
