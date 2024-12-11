<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 留言板 controller
 */

namespace backend\controllers;

use Yii;
use backend\models\Discussion;
use backend\models\DiscussionForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class DiscussionController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Discussion::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionCreate()
    {
        $model = new DiscussionForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $discussion = new Discussion();
            $discussion->attributes = $model->attributes;
            // Remove Did from attributes before saving to avoid duplicate key error
            unset($discussion->Did);
            $discussion->save(false);
            return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $discussion = $this->findModel($id);
        $model = new DiscussionForm();
        $model->attributes = $discussion->attributes;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $discussion->attributes = $model->attributes;
            $discussion->save(false);
            return $this->redirect(['index']);
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', ['model' => $model]);
    }

    protected function findModel($id)
    {
        if (($model = Discussion::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested discussion does not exist.');
    }
}