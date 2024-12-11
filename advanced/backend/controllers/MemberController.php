<?php
/**
 * Team: 我说的队
 * Coding by 石家伊 2211532, 20241211
 * 小组成员 controller
 */
namespace backend\controllers;

use Yii;
use backend\models\Member;
use backend\models\MemberForm;
use yii\web\Controller;
use yii\data\Pagination;

class MemberController extends Controller
{
    public function actionIndex()
    {
        $query = Member::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $members = $query->orderBy('Mid')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'members' => $members,
            'pagination' => $pagination,
        ]);
    }

    public function actionCreate()
    {
        $model = new MemberForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $member = new Member();
            $member->attributes = $model->attributes;
            if ($member->save()) {
                Yii::$app->session->setFlash('success', 'Member created successfully.');
                return $this->redirect(['view', 'id' => $member->Mid]);
            } else {
                Yii::$app->session->setFlash('error', 'Failed to create member.');
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $member = Member::findOne($id);
        if (!$member) {
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        }

        $model = new MemberForm();
        $model->attributes = $member->attributes;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $member->attributes = $model->attributes;
            if ($member->save()) {
                Yii::$app->session->setFlash('success', 'Member updated successfully.');
                return $this->redirect(['view', 'id' => $member->Mid]);
            } else {
                Yii::$app->session->setFlash('error', 'Failed to update member.');
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $member = Member::findOne($id);
        if (!$member) {
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        }

        if ($member->delete()) {
            Yii::$app->session->setFlash('success', 'Member deleted successfully.');
        } else {
            Yii::$app->session->setFlash('error', 'Failed to delete member.');
        }

        return $this->redirect(['index']);
    }

    public function actionView($id)
    {
        $member = Member::findOne($id);
        if (!$member) {
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('view', [
            'member' => $member,
        ]);
    }
}