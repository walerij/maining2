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
     
     public function setUserAddForm($userJoinForm)
    {
        $this->nickname=$userJoinForm->nickname;
        $this->login=$userJoinForm->login;
        $this->password=$userJoinForm->password;
        $this->status=$userJoinForm->status;

    }
 }