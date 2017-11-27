<?php
namespace app\models;

use yii\db\ActiveRecord;

class ScoreRecord extends ActiveRecord{
    public static function tableName()
    {
        return "score";
    }
    public function getUser()
    {
        return $this->hasOne(UserRecord::className(),['id'=>'user_id']);
    }
}