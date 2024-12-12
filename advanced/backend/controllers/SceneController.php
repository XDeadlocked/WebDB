<?php

namespace backend\controllers;

use backend\models\Scene;
use backend\models\SceneSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SceneController implements the CRUD actions for Scene model.
 */
/**
 * team: 我说的队
 * Coding by 许宸
 * 前沿研究控制器
 */
class SceneController extends Controller
{
    /**
     * @inheritDoc
     */
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

    /**
     * Lists all Scene models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SceneSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Scene model.
     * @param int $SceneID SceneID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($SceneID)
    {
        return $this->render('view', [
            'model' => $this->findModel($SceneID),
        ]);
    }

    /**
     * Creates a new Scene model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Scene();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'SceneID' => $model->SceneID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Scene model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $SceneID SceneID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($SceneID)
    {
        $model = $this->findModel($SceneID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'SceneID' => $model->SceneID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Scene model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $SceneID SceneID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($SceneID)
    {
        $this->findModel($SceneID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Scene model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $SceneID SceneID
     * @return Scene the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($SceneID)
    {
        if (($model = Scene::findOne(['SceneID' => $SceneID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
