<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 展示小组成员信息 controller
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Member;

class MemberController extends Controller
{
    public function actionIndex()
    {
        $members = Member::find()->all();
        return $this->render('index', ['members' => $members]);
    }

}