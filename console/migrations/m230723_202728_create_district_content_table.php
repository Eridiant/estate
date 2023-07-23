<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district_content}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%district}}`
 */
class m230723_202728_create_district_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%district_content}}', [
            'id' => $this->primaryKey(),
            'district_id' => $this->integer()->notNull(),
            'language' => $this->string(16)->notNull(),
            'title' => $this->text(),
            'excerpt' => $this->text(),
            'space_excerpt' => $this->tinyInteger()->notNull()->defaultValue(0),
            'description' => $this->text(),
            'space_description' => $this->tinyInteger()->notNull()->defaultValue(0),
        ]);

        // creates index for column `district_id`
        $this->createIndex(
            '{{%idx-district_content-district_id}}',
            '{{%district_content}}',
            'district_id'
        );

        // add foreign key for table `{{%district}}`
        $this->addForeignKey(
            '{{%fk-district_content-district_id}}',
            '{{%district_content}}',
            'district_id',
            '{{%district}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%district}}`
        $this->dropForeignKey(
            '{{%fk-district_content-district_id}}',
            '{{%district_content}}'
        );

        // drops index for column `district_id`
        $this->dropIndex(
            '{{%idx-district_content-district_id}}',
            '{{%district_content}}'
        );

        $this->dropTable('{{%district_content}}');
    }
}
