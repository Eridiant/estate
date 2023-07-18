<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district}}`.
 */
class m230718_133652_create_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%district}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'img' => $this->string(255),
            'polygon' => $this->text(),
            'position' => $this->text(),
            'position' => $this->text(),
            'labelColor' => $this->text(),
            'color' => $this->text(),
            'excerpt' => $this->text(),
            'description' => $this->text(),
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
