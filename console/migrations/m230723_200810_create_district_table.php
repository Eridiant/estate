<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district}}`.
 */
class m230723_200810_create_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%district}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255),
            'polygon' => $this->text(),
            'longitude' => $this->decimal(16, 12),
            'latitude' => $this->decimal(16, 12),
            'labelColor' => $this->string(24)->notNull(),
            'color' => $this->string(24)->notNull(),
            'show' => $this->tinyInteger()->notNull()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%district}}');
    }
}
