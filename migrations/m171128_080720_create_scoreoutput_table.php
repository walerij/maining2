<?php

use yii\db\Migration;

/**
 * Handles the creation of table `scoreoutput`.
 */
class m171128_080720_create_scoreoutput_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('scoreoutput', [
            'id' => $this->primaryKey(),
            'scoreid'=> $this->integer(),
            'dateoutput'=> $this->dateTime(),
            'scoreorg'=> $this->string(),
            'scorenumber'=> $this->string(),
            'scoresum'=> $this->double()
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
