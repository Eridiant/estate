<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lg_source_message}}`.
 */
class m220410_182000_create_lg_source_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lg_source_message}}', [
            'id' => $this->primaryKey(),
            'category' => $this->string(24),
            'message' => $this->text(),
        ]);

        $this->createIndex(
            'idx-lg_source_message-category',
            '{{%lg_source_message}}',
            'category'
        );

        $this->addForeignKey(
            'fk-source_message-message',
            '{{%lg_message}}',
            'id',
            '{{%lg_source_message}}',
            'id',
            'CASCADE'
        );

        $this->batchInsert('{{%language}}', ['id', 'name', 'key', 'code', 'default', 'updated_at', 'created_at', 'deleted_at'], [
            [1, 'English', 'en-US', 'en', 1, 1568637622, 1568271399, NULL],
            [2, 'Русский', 'ru-RU', 'ru', 0, 1568640706, 1568271399, NULL]
        ]);

        $this->batchInsert('{{%lg_source_message}}', ['id', 'category', 'message'], [
            [1, 'frontend', 'руссы']
        ]);

        $this->batchInsert('{{%lg_message}}', ['id', 'language', 'translation'], [
            [1, 'en-US', 'en'],
            [1, 'ru-RU', 'ru']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-source_message-message',
            '{{%lg_message}}',
        );

        $this->dropIndex(
            'idx-lg_source_message-category',
            '{{%lg_source_message}}',
        );

        $this->dropTable('{{%lg_source_message}}');
    }
}
