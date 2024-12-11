<?php

/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241210
 * 注册 表单model
 */

namespace backend\models;

use Yii;
use yii\base\Model;
use backend\models\Administrator;

class SignupForm extends Model
{
    public $adname;
    public $password;
    public $email;

    public function rules()
    {
        return [
            [['adname', 'password', 'email'], 'required'],
            ['adname', 'unique', 'targetClass' => '\backend\models\Administrator', 'targetAttribute' => 'Aname', 'message' => 'This adname has already been taken.'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\backend\models\Administrator', 'targetAttribute' => 'Amail', 'message' => 'This email address has already been taken.'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'adname' => 'Adname',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Administrator();
        $user->Aname = $this->adname;
        $user->Apassword = Yii::$app->security->generatePasswordHash($this->password);
        $user->Amail = $this->email;
        
        return $user->save() ? $user : null;
    }

    public function getPasswordStrength()
    {
        $score = 0;
        $length = strlen($this->password);

        // Check length
        if ($length >= 8) {
            $score += 1;
        } elseif ($length >= 6) {
            $score += 0.5;
        }

        // Check for uppercase letters
        if (preg_match('/[A-Z]/', $this->password)) {
            $score += 1;
        }

        // Check for lowercase letters
        if (preg_match('/[a-z]/', $this->password)) {
            $score += 1;
        }

        // Check for numbers
        if (preg_match('/[0-9]/', $this->password)) {
            $score += 1;
        }

        // Check for special characters
        if (preg_match('/[\W_]/', $this->password)) {
            $score += 1;
        }

        if ($score >= 4) {
            return 'Strong';
        } elseif ($score >= 2) {
            return 'Medium';
        } else {
            return 'Weak';
        }
    }
}