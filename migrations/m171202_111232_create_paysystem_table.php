<?php

use yii\db\Migration;

/**
 * Handles the creation of table `paysystem`.
 */
class m171202_111232_create_paysystem_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('paysystem', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'info'=>$this->string(),
            'link'=>$this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('paysystem');
    }
}
