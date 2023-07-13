<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%option}}`.
 */
class m230713_091959_add_type_column_to_option_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%option}}', 'type', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%option}}', 'type');
    }
}
