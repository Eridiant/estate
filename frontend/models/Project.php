<?php

namespace frontend\models;

use Yii;


/**
 * This is the model class for table "{{%project}}".
 *
 * @property int $id
 * @property string|null $lang
 * @property string|null $name
 * @property string|null $img
 * @property string|null $type
 * @property string|null $country
 * @property string|null $date
 * @property float|null $price
 * @property string|null $variant
 * @property string|null $excerpt
 * @property string|null $description
 * @property int $show
 * @property string|null $coordinate
 *
 * @property Option[] $options
 * @property ProjectOption[] $projectOptions
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%project}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['variant', 'excerpt', 'description'], 'string'],
            [['show'], 'integer'],
            [['lang'], 'string', 'max' => 12],
            [['name', 'img', 'country', 'date', 'coordinate'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lang' => 'Lang',
            'name' => 'Name',
            'img' => 'Img',
            'type' => 'Type',
            'country' => 'Country',
            'date' => 'Date',
            'price' => 'Price',
            'variant' => 'Variant',
            'excerpt' => 'Excerpt',
            'description' => 'Description',
            'show' => 'Show',
            'coordinate' => 'Coordinate',
        ];
    }

    /**
     * Gets query for [[Options]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOptions()
    {
        return $this->hasMany(Option::class, ['id' => 'option_id'])->viaTable('{{%project_option}}', ['project_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectOptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOptions()
    {
        return $this->hasMany(ProjectOption::class, ['project_id' => 'id']);
    }
}
