<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project_option}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%project}}`
 * - `{{%option}}`
 */
class m230702_105035_create_junction_table_for_project_and_option_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project_option}}', [
            'project_id' => $this->integer(),
            'option_id' => $this->integer(),
            'PRIMARY KEY(project_id, option_id)',
        ]);

        // creates index for column `project_id`
        $this->createIndex(
            '{{%idx-project_option-project_id}}',
            '{{%project_option}}',
            'project_id'
        );

        // add foreign key for table `{{%project}}`
        $this->addForeignKey(
            '{{%fk-project_option-project_id}}',
            '{{%project_option}}',
            'project_id',
            '{{%project}}',
            'id',
            'NO ACTION'
        );

        // creates index for column `option_id`
        $this->createIndex(
            '{{%idx-project_option-option_id}}',
            '{{%project_option}}',
            'option_id'
        );

        // add foreign key for table `{{%option}}`
        $this->addForeignKey(
            '{{%fk-project_option-option_id}}',
            '{{%project_option}}',
            'option_id',
            '{{%option}}',
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
            '{{%fk-project_option-project_id}}',
            '{{%project_option}}'
        );

        // drops index for column `project_id`
        $this->dropIndex(
            '{{%idx-project_option-project_id}}',
            '{{%project_option}}'
        );

        // drops foreign key for table `{{%option}}`
        $this->dropForeignKey(
            '{{%fk-project_option-option_id}}',
            '{{%project_option}}'
        );

        // drops index for column `option_id`
        $this->dropIndex(
            '{{%idx-project_option-option_id}}',
            '{{%project_option}}'
        );

        $this->dropTable('{{%project_option}}');
    }
}
