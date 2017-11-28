<?php

use yii\db\Migration;

/**
 * Handles the creation of table `scoreoutput`.
 */
class m171127_161203_create_scoreoutput_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('scoreoutput', [
            'id' => $this->primaryKey(),
            'scoreid'=>$this->integer(),
            'dateoutput'=>$this->dateTime(),//дата вывода
            'scoresum'=>$this->double(),//выводимая сумма
            'scoreorg'=>$this->string(),//организация, куда выводим
            'scorenumber'=>$this->string(20)//номер счета

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('scoreoutput');
    }
}
