<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m230701_072816_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'lang' => $this->string(12),
            'name' => $this->string(255),
            'img' => $this->string(255),
            'type' => $this->string(64),
            'country' => $this->string(255),
            'date' => $this->string(255),
            'price' => $this->money(),
            'variant' => $this->text(),
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
        $this->dropTable('{{%project}}');
    }
}
