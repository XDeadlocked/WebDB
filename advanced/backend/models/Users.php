<?php
/**
 * Team: 我说的队
 * Coding by 胡文馨 2211989, 20241211
 * 用户管理 model
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $Uid
 * @property string $Uname
 * @property string $Upassword
 * @property string|null $Umail
 */
class Users extends \yii\db\ActiveRecord
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
            [['Uname', 'Upassword'], 'required'],
            [['Uname', 'Upassword', 'Umail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Uid' => 'Uid',
            'Uname' => 'Uname',
            'Upassword' => 'Upassword',
            'Umail' => 'Umail',
        ];
    }
}
