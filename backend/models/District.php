<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%district}}".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $polygon
 * @property float|null $longitude
 * @property float|null $latitude
 * @property string $labelColor
 * @property string $color
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
            [['polygon'], 'string'],
            [['longitude', 'latitude'], 'number'],
            // [['labelColor', 'color'], 'required'],
            [['show'], 'integer'],
            [['labelColor', 'color'], 'string', 'max' => 24],
            [['galleryFiles' , 'imageFile', 'title', 'excerpt', 'description', 'img'], 'safe'],
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
        return $this->hasOne(DistrictContent::class, ['district_id' => 'id'])->onCondition(['language' => \backend\modules\language\models\Language::getCurrent()->key]);
    }

    public $_imageFile;
    public function getImageFile()
    {
        return $this->_imageFile;
    }
    public function setImageFile($value)
    {
        $this->_imageFile = $value;
    }
    public function upload()
    {
        if ($this->imageFile) {
            
            $uploadPath = Yii::getAlias( '@frontend' ) . '/web/uploads/district/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $fileName = uniqid() . '.' . $this->imageFile->extension;

            $this->imageFile->saveAs($uploadPath . $fileName);

            $this->img = $fileName;
            return true;
        }
        return false;
    }

    public function deleteOldFile($oldImage)
    {
        $oldImagePath = Yii::getAlias( '@frontend' ) . '/web/uploads/district/' . $oldImage;
        // Check if the file exists and delete it
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    private $_title;
    private $_excerpt;
    private $_description;
    public function getTitle()
    {
        if ($this->_title === null && !is_null($this->getContent()->one())) {
            $this->_title = $this->getContent()->one()->title;
        }
        return $this->_title;
    }
    public function setTitle($value)
    {
        $this->_title = $value;
    }

    public function getExcerpt()
    {
        if ($this->_excerpt === null && !is_null($this->getContent()->one())) {
            $this->_excerpt = $this->getContent()->one()->excerpt;
        }
        return $this->_excerpt;
    }
    public function setExcerpt($value)
    {
        $this->_excerpt = $value;
    }

    public function getDescription()
    {
        if ($this->_description === null && !is_null($this->getContent()->one())) {
            $this->_description = $this->getContent()->one()->description;
        }
        return $this->_description;
    }
    public function setDescription($value)
    {
        $this->_description = $value;
    }

    public function afterSave($insert, $changedAttributes)
    {
        $this->updateContents();
        $this->updateOptions();
        parent::afterSave($insert, $changedAttributes);
    }

    public function updateContents()
    {
        if ($this->title || $this->desc) {
            if (is_null($this->content)) {
                $content = new DistrictContent();
                $content->district_id = $this->id;
                $content->language = \backend\modules\language\models\Language::getCurrent()->key;
            } else {
                $content = DistrictContent::find()->where(['id' => $this->id, 'language' => \backend\modules\language\models\Language::getCurrent()->key])->one();
            }

            $content->title = $this->getTitle();
            $content->excerpt = $this->getExcerpt();
            $content->description = $this->getDescription();

            if (!$content->save()) {
                var_dump('<pre>');
                var_dump($content->getErrors());
                var_dump('</pre>');
                die;
            }
        }
    }
}
