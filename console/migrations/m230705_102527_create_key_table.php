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
            'key' => $this->string(255),
            'value' => $this->string(255),
            'content' => $this->text(),
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
