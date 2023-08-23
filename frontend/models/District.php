<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%district}}".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $polygon
 * @property float|null $longitude
 * @property float|null $latitude
 * @property string|null $labelColor
 * @property string|null $color
 * @property int $show
 *
 * @property DistrictContent[] $districtContents
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%district}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gallery', 'polygon'], 'string'],
            [['longitude', 'latitude'], 'number'],
            [['show'], 'integer'],
            [['img'], 'string', 'max' => 255],
            [['labelColor', 'color'], 'string', 'max' => 24],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'gallery' => 'Gallery',
            'polygon' => 'Polygon',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'labelColor' => 'Label Color',
            'color' => 'Color',
            'show' => 'Show',
        ];
    }

    /**
     * Gets query for [[DistrictContents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContent()
    {
        return $this->hasOne(DistrictContent::class, ['district_id' => 'id'])->onCondition(['language' => Yii::$app->language]);
    }
}
