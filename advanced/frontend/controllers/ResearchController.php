<?php
/**
 * Team: 我说的队
 * Coding by 许宸
 * 发展历史 controller
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Research;
use yii\data\Pagination;

class ResearchController extends Controller
{
    /**
     * 展示所有历史事件
     */
    public function actionIndex()
    {
        // 查询历史事件
        $query = Research::find();

        // 分页设置
        $pagination = new Pagination([
            'defaultPageSize' => 5, // 每页显示 5 条数据
            'totalCount' => $query->count(),
        ]);

        // 查询结果，应用分页
        $researchs = $query->orderBy('ResearchID')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        // 渲染视图
        return $this->render('index', [
            'researchs' => $researchs,
            'pagination' => $pagination,
        ]);
    }
}