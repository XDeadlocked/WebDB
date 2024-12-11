<?php
/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241211
 * 登出 表单model
 */

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\Administrator; 

class LogoutForm extends Model
{
    public function logout()
    {
        // 注销用户
        Yii::$app->user->logout();
        
        // 清除会话中的用户名（确保键名一致）
        Yii::$app->session->remove('Adname'); 

        // 返回 true 表示登出成功
        return true;
    }
}