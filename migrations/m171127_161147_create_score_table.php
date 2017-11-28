<?php

use yii\db\Migration;

/**
 * Handles the creation of table `score`.
 */
class m171127_161147_create_score_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('score', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer()->notNull(),
            'score'=>$this->double()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('score');
    }
}
