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
            'name' => $this->string(255),
            'img' => $this->string(255),
            'type' => $this->string(64),
            'country' => $this->string(255),
            'date' => $this->integer(11),
            'price' => $this->money(),
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
