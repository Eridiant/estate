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
            'item_id' => $this->integer()->notNull(),
            'type' => $this->tinyInteger()->notNull()->defaultValue(1),
            'img' => $this->string(255),
        ]);

        // creates index for column `item_id`
        $this->createIndex(
            '{{%idx-gallery-item_id}}',
            '{{%gallery}}',
            'item_id'
        );

        // creates index for column `type`
        $this->createIndex(
            '{{%idx-gallery-type}}',
            '{{%gallery}}',
            'type'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops index for column `type`
        $this->dropIndex(
            '{{%idx-gallery-type}}',
            '{{%gallery}}'
        );

        // drops index for column `item_id`
        $this->dropIndex(
            '{{%idx-gallery-item_id}}',
            '{{%gallery}}'
        );

        $this->dropTable('{{%gallery}}');
    }
}
