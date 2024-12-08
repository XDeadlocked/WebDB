<?php
/**
 * Team: 我说的队
 * Coding by 何禹姗 2211421, 20241208
 * 涵盖领域 controller
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Domain;  // 使用 Domain 模型进行数据库查询
use frontend\models\DomainForm;  // 如果需要处理表单，可以引入 DomainForm

class DomainController extends Controller
{
    public function actionIndex()
    {
        // 查询领域数据，限制为10条记录
        $query = Domain::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $domains = $query->orderBy('DomainID DESC')
                         ->offset($pagination->offset)
                         ->limit($pagination->limit)
                         ->all();

        return $this->render('index', [
            'domains' => $domains,
            'pagination' => $pagination,
        ]);
    }

    // 如果你需要添加或编辑领域，可以使用 DomainForm 模型
    public function actionCreate()
    {
        $model = new DomainForm();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            if ($model->save()) {
                Yii::$app->session->setFlash('success', '领域已成功添加。');
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($DomainID)
    {
        $model = new DomainForm();
        $model->loadDomain($DomainID);

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            if ($model->update($DomainID)) {
                Yii::$app->session->setFlash('success', '领域已成功更新。');
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', ['model' => $model]);
    }
}