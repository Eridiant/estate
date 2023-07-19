<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%message}}`.
 */
class m230719_114941_create_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%message}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string(32)->notNull(),
            'phone' => $this->string(32)->notNull(),
            'subject' => $this->string(255),
            'lang' => $this->string(32),
            'body' => $this->text(),
            'status_amo_id' => $this->integer(),
            'status_mail' => $this->tinyInteger()->defaultValue(1),
            'status_save' => $this->tinyInteger()->defaultValue(1),
            'ip' => $this->text(),
            'city' => $this->text(),
            'country' => $this->text(),
            'created_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%message}}');
    }
}
