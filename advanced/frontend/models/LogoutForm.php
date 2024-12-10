<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\User; 

class LogoutForm extends Model
{
    /**
     * Logs out the current user.
     *
     * @return bool Whether the logout was successful.
     */
    public function logout()
    {
        // 注销用户
        Yii::$app->user->logout();
        
        // 清除会话中的用户名（确保键名一致）
        Yii::$app->session->remove('username'); 

        // 返回 true 表示登出成功
        return true;
    }
}