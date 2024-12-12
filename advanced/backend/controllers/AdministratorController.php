<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 管理员表 controller
 */

namespace backend\controllers;

use backend\models\Administrator;
use backend\models\AdministratorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class AdministratorController extends Controller
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        $searchModel = new AdministratorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($Aid)
    {
        return $this->render('view', [
            'model' => $this->findModel($Aid),
        ]);
    }

    public function actionCreate()
    {
        $model = new Administrator();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($Aid)
    {
        $model = $this->findModel($Aid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Aid' => $model->Aid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($Aid)
    {
        $this->findModel($Aid)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($Aid)
    {
        if (($model = Administrator::findOne([$Aid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
