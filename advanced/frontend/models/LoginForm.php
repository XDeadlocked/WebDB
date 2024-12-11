<?php
/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 登录 表单model
 */

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\User; // 确保引入 User 模型

class LoginForm extends Model
{
    public $Uname;
    public $Upassword;

    private $_user = false;

    /**
     * 定义验证规则
     */
    public function rules()
    {
        return [
            [['Uname', 'Upassword'], 'required'],
            ['Uname', 'string', 'max' => 255],
            ['Upassword', 'string', 'max' => 255],
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

        if ($user && Yii::$app->security->validatePassword($this->Upassword, $user->Upassword)) {
            // 登录成功，可以在这里设置会话或其他操作
            Yii::$app->session->set('userId', $user->Uid);
            Yii::$app->session->set('username', $user->Uname); // 存储用户名
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
            $this->_user = User::findOne(['Uname' => $this->Uname]);
        }

        return $this->_user;
    }
}