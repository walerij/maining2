<?php
namespace app\models;
use yii\base\Model;

class ScoreoutputForm extends Model{
    public $scoreid;
    public $dateoutput;
    public $scoreorg;
    public $scorenumber;
    public $scoresum;

    public function rules()
    {
        return
        [
            ['scoreid','required'],
            ['dateoutput','required'],
            ['scoreorg','required'],
            ['scorenumber','required'],
            ['scoresum','required']
        ];
    }

}