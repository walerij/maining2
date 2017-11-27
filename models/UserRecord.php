<?php
 namespace app\models;

 use yii\db\ActiveRecord;

 class UserRecord extends ActiveRecord{

     public static function tableName()
     {
         return "user";
     }

     public function getScore()
     {
         return $this->hasOne(ScoreRecord::className(),['user_id'=>'id']);
     }
 }