<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Add new user';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-user">            
        </i>
        &nbsp;Добавить пользователя
    </div>
    <div class="panel-body">
        <?php $form= ActiveForm::begin()?>
        <?= $form->field($AddUser, 'nickname') ?>
        <?= $form->field($AddUser, 'login') ?>
         <?= $form->field($AddUser, 'password')->passwordInput() ?>
         <?= $form->field($AddUser, 'status') ?>
        
        <button type="submit" class="btn btn-warning">
            Сохранить
        </button>
        <?php        ActiveForm::end(); ?>
                
    </div>
</div>

