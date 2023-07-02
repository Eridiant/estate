<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%language}}`.
 */
class m220410_181902_create_language_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%language}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(24)->notNull(),
            'key' => $this->string(16)->notNull(),
            'code' => $this->string(10)->notNull(),
            'default' => $this->smallInteger(6)->notNull()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'deleted_at' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-language-key',
            '{{%language}}',
            'key'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops index for column `key`
        $this->dropIndex(
            'idx-language-key',
            '{{%language}}'
        );

        $this->dropTable('{{%language}}');
    }
}
