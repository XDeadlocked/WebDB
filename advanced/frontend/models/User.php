<?php

/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241210
 * 用户表 交互model
 */

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $Uid
 * @property string $Uname
 * @property string $Upassword
 * @property string $Umail
 */
class User extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Uname', 'Upassword', 'Umail'], 'required'],
            [['Uname'], 'string', 'max' => 255],
            [['Umail'], 'email'],
            [['Uname'], 'unique'],
            [['Umail'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Uid' => 'UID',
            'Uname' => 'Username',
            'Upassword' => 'Password',
            'Umail' => 'Email',
        ];
    }
}