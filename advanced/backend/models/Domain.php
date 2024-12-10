<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 model
 */

namespace backend\models;

use Yii;

class Domain extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'domains';
    }

    public function rules()
    {
        return [
            [['DomainID','DomainName', 'Description', 'Tech', 'Application'], 'required'],
            ['DomainID', 'integer'],
            ['DomainName', 'string', 'max' => 255],
            ['Description', 'string'],
            ['Tech', 'string'],
            ['Application', 'string'],
            ['References', 'string'],
            ['DomainName', 'unique', 'targetClass' => Domain::class, 'message' => '该领域名称已存在。'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'DomainID' => '序号',
            'DomainName' => '领域名称',
            'Description' => '描述',
            'Tech' => '技术',
            'Application' => '应用',
            'References' => '参考文献',
        ];
    }
}
