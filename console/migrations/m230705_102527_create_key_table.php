<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%key}}`.
 */
class m230705_102527_create_key_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%key}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%key}}');
    }
}
