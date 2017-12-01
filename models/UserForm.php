<?php

namespace app\models;

use yii\base\Model;

class UserForm extends Model {
    
    public $nickname;
    public $login;
    public $password;
    public $status;

    public function rules()
    {
        return [
            ['nickname','required'],
            ['login','required'],
            ['password','required'],
            ['status','required']
        ]; 
    }
    
    public function setRecord($userRecord)
    {
        
    }

}