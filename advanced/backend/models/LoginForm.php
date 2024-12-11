<?php
/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241211
 * 登录 表单model
 */

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\Administrator; 

class LoginForm extends Model
{
    public $Aname;
    public $Apassword;

    private $_user = false;

    /**
     * 定义验证规则
     */
    public function rules()
    {
        return [
            [['Aname', 'Apassword'], 'required'],
            ['Aname', 'string', 'max' => 255],
            ['Apassword', 'string', 'max' => 255],
        ];
    }

    /**
     * 登录验证方法
     */
    public function login()
    {
        if (!$this->validate()) {
            return false;
        }

        $user = $this->getUser();

        if ($user && Yii::$app->security->validatePassword($this->Apassword, $user->Apassword)) {
            // 登录成功，可以在这里设置会话或其他操作
            Yii::$app->session->set('adId', $user->Aid);
            Yii::$app->session->set('adname', $user->Aname); // 存储用户名
            Yii::$app->session->setFlash('success', '登录成功');
            return true;
        } else {
            // 登录失败，设置错误信息
            Yii::$app->session->setFlash('error', '用户名或密码错误');
            return false;
        }
    }

    /**
     * 获取用户信息
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Administrator::findOne(['Aname' => $this->Aname]);
        }

        return $this->_user;
    }
}