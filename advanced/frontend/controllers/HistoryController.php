<?php
/**
 * Team: 我说的队
 * Coding by 胡文馨 2211989, 20241208
 * 发展历史 controller
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\History;
use yii\data\Pagination;

class HistoryController extends Controller
{
    /**
     * 展示所有历史事件
     */
    public function actionIndex()
    {
        // 查询历史事件
        $query = History::find();

        // 分页设置
        $pagination = new Pagination([
            'defaultPageSize' => 5, // 每页显示 5 条数据
            'totalCount' => $query->count(),
        ]);

        // 查询结果，应用分页
        $histories = $query->orderBy('year')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        // 渲染视图
        return $this->render('index', [
            'histories' => $histories,
            'pagination' => $pagination,
        ]);
    }

    /**
     * 事件详情页（可选）
     */
    public function actionView($id)
    {
        $history = History::findOne($id);

        if (!$history) {
            throw new \yii\web\NotFoundHttpException('事件未找到！');
        }

        return $this->render('view', [
            'history' => $history,
        ]);
    }
}
