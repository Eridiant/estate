<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project_content}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%project}}`
 */
class m230722_105425_create_project_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project_content}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'language' => $this->string(16)->notNull(),
            'title' => $this->text(),
            'desc' => $this->text(),
        ]);

        // creates index for column `project_id`
        $this->createIndex(
            '{{%idx-project_content-project_id}}',
            '{{%project_content}}',
            'project_id'
        );

        // add foreign key for table `{{%project}}`
        $this->addForeignKey(
            '{{%fk-project_content-project_id}}',
            '{{%project_content}}',
            'project_id',
            '{{%project}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%project}}`
        $this->dropForeignKey(
            '{{%fk-project_content-project_id}}',
            '{{%project_content}}'
        );

        // drops index for column `project_id`
        $this->dropIndex(
            '{{%idx-project_content-project_id}}',
            '{{%project_content}}'
        );

        $this->dropTable('{{%project_content}}');
    }
}
