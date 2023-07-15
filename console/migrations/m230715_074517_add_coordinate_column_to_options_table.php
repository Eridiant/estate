<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%options}}`.
 */
class m230715_074517_add_coordinate_column_to_options_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%options}}', 'coordinate', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%options}}', 'coordinate');
    }
}
