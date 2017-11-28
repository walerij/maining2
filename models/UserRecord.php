<?php
 namespace app\models;


 use yii\db\ActiveRecord;
 use yii;

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
        $this->setPassword($userJoinForm->password);
        $this->status=$userJoinForm->status;

    }

     public function setPassword($password)
     {
         $this->password=Yii::$app->security->generatePasswordHash($password);
       //  $this->authokey=Yii::$app->security->generateRandomString(100);
     }
 }