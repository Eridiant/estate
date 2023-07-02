<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%project}}`
 */
class m230702_102308_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gallery}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `project_id`
        $this->createIndex(
            '{{%idx-gallery-project_id}}',
            '{{%gallery}}',
            'project_id'
        );

        // add foreign key for table `{{%project}}`
        $this->addForeignKey(
            '{{%fk-gallery-project_id}}',
            '{{%gallery}}',
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
            '{{%fk-gallery-project_id}}',
            '{{%gallery}}'
        );

        // drops index for column `project_id`
        $this->dropIndex(
            '{{%idx-gallery-project_id}}',
            '{{%gallery}}'
        );

        $this->dropTable('{{%gallery}}');
    }
}
