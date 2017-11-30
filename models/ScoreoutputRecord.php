<?php
namespace app\models;

use yii\db\ActiveRecord;

class ScoreoutputRecord extends ActiveRecord{
    public static function tableName()
    {
        return "scoreoutput";
    }
    
    public function setRecord($scoreoutput){
        $this->scoreid=$scoreoutput->scoreid;
        $this->dateoutput=$scoreoutput->dateoutput;
        $this->scoreorg=$scoreoutput->scoreorg;
        $this->scorenumber->$scoreoutput->scorenumber;
        $this->scoresum=$scoreoutput->scoresum;
    }
}