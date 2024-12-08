<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 涵盖领域 model表单
 */

 namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\Domain;

class DomainForm extends Model
{
    public $DomainName;
    public $Description;
    public $Tech;
    public $Application;
    public $References;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['DomainName', 'Description', 'Tech', 'Application'], 'required'],
            ['DomainName', 'string', 'max' => 255],
            ['Description', 'string'],
            ['Tech', 'string'],
            ['Application', 'string'],
            ['References', 'string'],
            ['DomainName', 'unique', 'targetClass' => Domain::class, 'message' => '该领域名称已存在。'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'DomainName' => '领域名称',
            'Description' => '描述',
            'Tech' => '技术',
            'Application' => '应用',
            'References' => '参考文献',
        ];
    }

    /**
     * Saves the form data to the database.
     *
     * @return bool whether the saving succeeded
     */
    public function save()
    {
        if (!$this->validate()) {
            return false;
        }

        $domain = new Domain();
        $domain->DomainName = $this->DomainName;
        $domain->Description = $this->Description;
        $domain->Tech = $this->Tech;
        $domain->Application = $this->Application;
        $domain->References = $this->References;

        return $domain->save();
    }

    /**
     * Updates an existing domain with the form data.
     *
     * @param integer $id the ID of the domain to be updated
     * @return bool whether the updating succeeded
     */
    public function update($DomainID)
    {
        if (!$this->validate()) {
            return false;
        }

        $domain = Domain::findOne($DomainID);
        if ($domain === null) {
            throw new \yii\web\NotFoundHttpException('The requested domain does not exist.');
        }

        $domain->DomainName = $this->DomainName;
        $domain->Description = $this->Description;
        $domain->Tech = $this->Tech;
        $domain->Application = $this->Application;
        $domain->References = $this->References;

        return $domain->save();
    }

    /**
     * Loads an existing domain into the form.
     *
     * @param integer $id the ID of the domain to be loaded
     * @return bool whether the loading succeeded
     */
    public function loadDomain($DomainID)
    {
        $domain = Domain::findOne($DomainID);
        if ($domain === null) {
            throw new \yii\web\NotFoundHttpException('The requested domain does not exist.');
        }

        $this->DomainName = $domain->DomainName;
        $this->Description = $domain->Description;
        $this->Tech = $domain->Tech;
        $this->Application = $domain->Application;
        $this->References = $domain->References;

        return true;
    }
}