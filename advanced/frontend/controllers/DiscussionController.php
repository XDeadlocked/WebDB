<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241208
 * 留言板 controller
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Discussion;
use frontend\models\DiscussionForm;

class DiscussionController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new Discussion();
        $dataProvider = $searchModel->find()->all();

        $model = new DiscussionForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $discussion = new Discussion();
            $discussion->Dtext = $model->Dtext;
            $discussion->Ddate = date('Y-m-d H:i:s'); // 假设你想要记录当前时间
            if ($discussion->save()) {
                // 成功保存后可以重定向或做其他处理
                return $this->refresh();
            }
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }
}