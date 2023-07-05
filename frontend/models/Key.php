<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%key}}".
 *
 * @property int $id
 * @property string|null $key
 * @property string|null $value
 * @property string|null $content
 */
class Key extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%key}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['key', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'value' => 'Value',
            'content' => 'Content',
        ];
    }
}
