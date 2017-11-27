<?php
namespace app\models;

use yii\db\ActiveRecord;

class ScoreoutputRecord extends ActiveRecord{
    public static function tableName()
    {
        return "scoreoutput";
    }
}