<?php
/**
 * team:我说的队
 * Coding by 许宸
 * 前沿研究 model表单
 */
namespace frontend\models;
use frontend\models\Scene;


class Research extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'research';
    }

    public function getScene()
    {
        return $this->hasOne(Scene::class, ['SceneID' => 'SceneID']);
    }
}
