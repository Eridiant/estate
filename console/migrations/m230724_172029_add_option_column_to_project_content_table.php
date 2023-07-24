<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%project_content}}`.
 */
class m230724_172029_add_option_column_to_project_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%project_content}}', 'apartment', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%project_content}}', 'apartment');
    }
}
