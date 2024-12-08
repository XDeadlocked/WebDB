<?php
/**
 * team:我说的队
 * Coding by 何禹姗 2211421,20241208
 * 工程应用 controllers
 */

namespace frontend\controllers;
 
 use Yii;
 use yii\web\Controller;
 use yii\web\NotFoundHttpException;
 use app\models\Project;
 use app\models\ProjectForm;
 
 class ProjectController extends Controller
 {
     // 显示所有项目列表
     public function actionIndex()
     {
         $projects = Project::find()->all();
         return $this->render('index', ['projects' => $projects]);
     }
 
     // 查看单个项目详情
     public function actionView($id)
     {
         $project = $this->findModel($id);
         return $this->render('view', ['project' => $project]);
     }
 
     // 创建新项目
     public function actionCreate()
     {
        $model = new ProjectForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // 设置闪存消息
            Yii::$app->session->setFlash('success', '新项目创建成功！');
            // 重定向到项目列表页面
            return $this->redirect(['index']);
        }
    
        return $this->render('create', ['model' => $model]);
     }
 
     // 更新现有项目
     public function actionUpdate($id)
     {
         $project = $this->findModel($id);
         $model = new ProjectForm();
         $model->attributes = $project->attributes;
 
         if ($model->load(Yii::$app->request->post()) && $model->save($id)) {
             return $this->redirect(['view', 'id' => $id]);
         }
 
         return $this->render('update', ['model' => $model]);
     }
 
     // 删除项目
     public function actionDelete($id)
     {
        $model = Project::findOne($id);
        if ($model !== null) {
            $model->delete();
            Yii::$app->session->setFlash('success', '项目已成功删除。');
            return $this->redirect(['index']);
        } else {
            throw new NotFoundHttpException('项目不存在。');
        }
     }
 
     // 查找项目模型
     protected function findModel($id)
     {
         if (($model = Project::findOne($id)) !== null) {
             return $model;
         }
 
         throw new NotFoundHttpException('The requested page does not exist.');
     }
 }