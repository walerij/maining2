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

    public function getScoreoutput() //создание связи с Scoreoutput один-ко-многим
    {
        return $this->hasMany(ScoreoutputRecord::className(),['scoreid'=>'id']);
    }
    
    /*
          добавление счета с суммой 0
     *      */
    public function addScore($UserForm) {
        $this->user_id = $UserForm->id;
        $this->score=0;
    }
    /*
     * изменение суммы счета
     *      */
    
    public function updateSummScore($sum=0)
    {
        $this->score=$sum;
    }
}