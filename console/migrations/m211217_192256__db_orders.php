<?php

use yii\db\Migration;

/**
 * Class m211217_192256__db_orders
 */
class m211217_192256__db_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'sku' => 'varchar(32) not null',
            'size' => $this->float(1)->notNull(),
            'name' => 'varchar(255) not null',
            'surname' => 'varchar(255) not null',
            'phone' => 'varchar(32) not null',
            'city' => 'varchar(255) not null',
            'warehouse' => 'varchar(255) not null',
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }
}
