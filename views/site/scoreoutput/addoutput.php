<h2>Добавим вывод</h2>


<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-bitcoin">

        </i>
        &nbsp;Счет
    </div>
    <div class="panel-body">
        <div>Добавление</div>
        <div>
            <?php $form= \yii\bootstrap\ActiveForm::begin()?>
             <?=$form->field($output, 'dateoutput')?>
             <?=$form->field($output, 'u')?>
             <?=$form->field($output, 'dateoutpt')?>
             <?=$form->field($output, 'dateoutpt')?>
            <button class="btn btn-success" type="submit">
                Сохранить запись
            </button>
            <?php \yii\bootstrap\ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php
?>