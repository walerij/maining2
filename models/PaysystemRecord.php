<?php
namespace app\models;

use yii\db\ActiveRecord;

class PaysystemRecord extends ActiveRecord{

    public static function tableName()
    {
        return "paysystem";
    }

    public function setRecord($paysystemform){

        $this->name= $paysystemform->name;
        $this->info= $paysystemform->info;
        $this->link= $paysystemform->link;
    }
}