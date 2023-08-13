<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%graph}}`.
 */
class m230808_094336_create_graph_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%graph}}', [
            'id' => $this->primaryKey(),
            'data' => $this->string(255),
            'cost' => $this->decimal("10", "2"),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%graph}}');
    }
}
