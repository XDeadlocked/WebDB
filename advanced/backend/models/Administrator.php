<?php

/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241211
 * 管理员表 交互model
 */

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class Administrator extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administrator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Aname', 'Apassword', 'Amail'], 'required'],
            [['Aname'], 'string', 'max' => 255],
            [['Amail'], 'email'],
            [['Aname'], 'unique'],
            [['Amail'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Aid' => 'UID',
            'Aname' => 'Adname',
            'Apassword' => 'Password',
            'Amail' => 'Email',
        ];
    }
}