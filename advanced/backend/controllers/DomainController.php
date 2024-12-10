<?php
/**
 * team: 我说的队
 * Coding by 何禹姗 2211421, 20241210
 * 涵盖领域 controller
 */

namespace backend\controllers;

use backend\models\Domain;
use backend\models\DomainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class DomainController extends Controller
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
        $searchModel = new DomainSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($DomainID)
    {
        return $this->render('view', [
            'model' => $this->findModel($DomainID),
        ]);
    }

    public function actionCreate()
    {
        $model = new Domain();

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

    public function actionUpdate($DomainID)
    {
        $model = $this->findModel($DomainID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DomainID' => $model->DomainID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($DomainID)
    {
        $this->findModel($DomainID)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($DomainID)
    {
        if (($model = Domain::findOne([$DomainID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
