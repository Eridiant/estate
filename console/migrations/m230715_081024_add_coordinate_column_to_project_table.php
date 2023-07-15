<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%project}}`.
 */
class m230715_081024_add_coordinate_column_to_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%project}}', 'coordinate', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%project}}', 'coordinate');
    }
}
