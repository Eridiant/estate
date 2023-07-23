<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%district_content}}".
 *
 * @property int $id
 * @property int $district_id
 * @property string $language
 * @property string|null $title
 * @property string|null $excerpt
 * @property int $space_excerpt
 * @property string|null $description
 * @property int $space_description
 *
 * @property District $district
 */
class DistrictContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%district_content}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_id', 'language'], 'required'],
            [['district_id', 'space_excerpt', 'space_description'], 'integer'],
            [['title', 'excerpt', 'description'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::class, 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'district_id' => 'District ID',
            'language' => 'Language',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'space_excerpt' => 'Space Excerpt',
            'description' => 'Description',
            'space_description' => 'Space Description',
        ];
    }

    /**
     * Gets query for [[District]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::class, ['id' => 'district_id']);
    }
}
