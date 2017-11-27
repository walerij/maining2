<?php
namespace app\models;
use yii\base\Model;

class ScoreoutputForm extends Model{
    public $score_id;
    public $dateoutput;
    public $scoreorg;
    public $scorenumber;
    public $scoresum;

    public function rules()
    {
        return
        [
            ['dateoutput','required']
        ];
    }

}