<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%district}}`.
 */
class m230819_085333_add_gallery_column_to_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%district}}', 'gallery', $this->text()->after('img'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%district}}', 'gallery');
    }
}
