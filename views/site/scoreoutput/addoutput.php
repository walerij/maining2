<h2>Добавим вывод</h2>


<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-bitcoin">

        </i>
        &nbsp;Счет
    </div>
    <div class="panel-body">
        <div>
            <?php $form= \yii\bootstrap\ActiveForm::begin()?>

             <?=$form->field($output, 'dateoutput')->label('Дата записи')?>
             <?=$form->field($output, 'scoreorg')->label('Сервис вывода')?>
             <?=$form->field($output, 'scorenumber')->label('Номер счета')?>
             <?=$form->field($output, 'scoresum')->label('Сумма')?>
            <button class="btn btn-success" type="submit">
                Сохранить запись
            </button>
            <?=$form->field($output, 'scoreid')->hiddenInput()->label('')?>
            <?php \yii\bootstrap\ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php
?>