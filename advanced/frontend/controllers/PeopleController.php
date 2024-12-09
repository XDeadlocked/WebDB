<?php
/**
 * Team: 我说的队
 * Coding by 胡文馨 2211989, 20241208
 * 领袖人物 controller
 */

 namespace frontend\controllers;
 
 use yii\web\Controller;
 use frontend\models\People;
 
 class PeopleController extends Controller
 {
     /**
      * 展示所有人物数据
      */
      public function actionIndex($keyword = '')
      {
          // 如果提供了关键字，执行搜索
          $query = People::find();
          if ($keyword) {
              $query->where(['like', 'name', $keyword])
                    ->orWhere(['like', 'contributions', $keyword]);
          }
          $people = $query->all();
  
          return $this->render('index', [
              'people' => $people,
              'keyword' => $keyword,
          ]);
      }
 
     /**
      * 搜索功能
      * @param string $keyword 搜索关键字
      */
      public function actionSearch($keyword = '')
      {
          $query = People::find();
  
          // 如果提供了关键字，执行搜索
          if (!empty($keyword)) {
              $query->where(['like', 'name', $keyword])
                    ->orWhere(['like', 'contributions', $keyword]);
          }
  
          $people = $query->all();
  
          return $this->render('search', [
              'people' => $people,
              'keyword' => $keyword,
          ]);
      }
 }
 