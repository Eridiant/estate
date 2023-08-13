<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%graph}}".
 *
 * @property int $id
 * @property string|null $data
 * @property float|null $cost
 */
class Graph extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%graph}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost'], 'number'],
            [['data'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'cost' => 'Cost',
        ];
    }
}
