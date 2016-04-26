<?php

use yii\db\Migration;

class m160426_085145_create_request_table extends Migration
{
    public function up()
    {
        $this->createTable('request', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(10)->notNull(),
            'date_create' => $this->datetime()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('request');
    }
}
