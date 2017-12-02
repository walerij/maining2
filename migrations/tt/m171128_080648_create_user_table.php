<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171128_080648_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'nickname'=> $this->string(),
            'login'=> $this->string(),
            'password'=> $this->string(),
            'status'=> $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
