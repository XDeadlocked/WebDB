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
 
     // 查找项目模型
     protected function findModel($id)
     {
         if (($model = Project::findOne($id)) !== null) {
             return $model;
         }
 
         throw new NotFoundHttpException('The requested page does not exist.');
     }
 }