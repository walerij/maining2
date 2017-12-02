<?php
 namespace app\models;

 use yii\base\Model;

 class PaysystemForm extends Model
 {
     public $name;
     public $info;
     public $link;

     public function rules()
     {
         return [
             ['name','required'],
             ['info','required'],
             ['link','required']
         ];
     }
 }