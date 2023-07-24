<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;


/**
 * This is the model class for table "{{%project}}".
 *
 * @property int $id
 * @property string|null $lang
 * @property string|null $name
 * @property string|null $img
 * @property string|null $gallery
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
            [['gallery', 'variant', 'excerpt', 'description'], 'string'],
            [['show'], 'integer'],
            [['lang'], 'string', 'max' => 12],
            [['name', 'country', 'date', 'coordinate'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 64],
            [['optionsArray', 'galleryFiles' , 'imageFile', 'title', 'desc', 'img', 'apartment'], 'safe'],
            // [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
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
            'gallery' => 'Gallery',
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
            
            $uploadPath = Yii::getAlias( '@frontend' ) . '/web/uploads/project/';
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
        $oldImagePath = Yii::getAlias( '@frontend' ) . '/web/uploads/project/' . $oldImage;
        // Check if the file exists and delete it
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    public $_galleryFiles;
    public function getGalleryFiles()
    {
        return $this->_galleryFiles;
    }
    public function setGalleryFiles($value)
    {
        $this->_galleryFiles = $value;
    }

    public function galleryUpload()
    {
        $uploadPath = Yii::getAlias( '@frontend' ) . '/web/uploads/project/' . $this->id . '/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $gallery = [];

        foreach ($this->galleryFiles as $file) {
            $fileName = uniqid() . '.' . $file->extension;
            $file->saveAs($uploadPath . $fileName);
            $gallery[] = $fileName;
        }

        $this->gallery = $this->gallery ? $this->gallery . "," . implode(",", $gallery) : implode(",", $gallery);
        
        return true;
    }

    /**
     * Gets query for [[Galleries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGalleries()
    {
        return $this->hasMany(Gallery::class, ['item_id' => 'id']);
    }
    public function getGallery()
    {
        return $this->hasOne(Gallery::class, ['item_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectContents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContent()
    {
        return $this->hasOne(ProjectContent::class, ['project_id' => 'id'])->onCondition(['language' => \backend\modules\language\models\Language::getCurrent()->key]);
    }

    /**
     * Gets query for [[Options]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOptions()
    {
        return $this->hasMany(Option::class, ['id' => 'option_id'])->viaTable('{{%project_option}}', ['project_id' => 'id']);
        // return $this->hasMany(Option::class, ['id' => 'option_id'])->viaTable('{{%project_option}}', ['project_id' => 'id', 'lang' => \backend\modules\language\models\Language::getCurrent()->code]);
        // return $this->hasMany(Option::class, ['id' => 'option_id'])->viaTable('{{%project_option}}', ['project_id' => 'id', 'lang' => 'lang']);
    }

    /**
     * Gets query for [[ProjectOptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOptions()
    {
        // return $this->hasMany(ProjectOption::class, ['project_id' => 'id']);
        // return $this->hasMany(ProjectOption::class, ['project_id' => 'id', 'lang' => \backend\modules\language\models\Language::getCurrent()->code]);
        // return $this->hasMany(ProjectOption::class, ['project_id' => 'id', 'lang' => \backend\modules\language\models\Language::getCurrent()->code]);
        return $this->hasMany(ProjectOption::class, ['project_id' => 'id']);
    }



    private $_title;
    private $_desc;
    private $_apartment;
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
    public function getDesc()
    {
        if ($this->_desc === null && !is_null($this->getContent()->one())) {
            $this->_desc = $this->getContent()->one()->desc;
        }
        return $this->_desc;
    }
    public function setDesc($value)
    {
        $this->_desc = $value;
    }
    public function getApartment()
    {
        if ($this->_apartment === null && !is_null($this->getContent()->one())) {
            $this->_apartment = $this->getContent()->one()->apartment;
        }
        return $this->_apartment;
    }
    public function setApartment($value)
    {
        $this->_apartment = $value;
    }

    private $_optionsArray;

    public function getOptionsArray()
    {
        if ($this->_optionsArray === null) {
            $this->_optionsArray = $this->getOptions()->select('id')->column();
        }
        return $this->_optionsArray;
    }

    public function setOptionsArray($value)
    {
        $this->_optionsArray = (array)$value;
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
                $content = new ProjectContent();
                $content->project_id = $this->id;
                $content->language = \backend\modules\language\models\Language::getCurrent()->key;
            } else {
                $content = ProjectContent::find()->where(['project_id' => $this->id, 'language' => \backend\modules\language\models\Language::getCurrent()->key])->one();
                // $content = $this->content;
            }

            $content->title = $this->getTitle();
            $content->desc = $this->getDesc();
            $content->apartment = $this->getApartment();

            if (!$content->save()) {
                var_dump('<pre>');
                var_dump($content->getErrors());
                var_dump('</pre>');
                die;
            }
        }
    }

    private function updateOptions()
    {
        $currentOptionIds = $this->getOptions()->select('id')->column();
        $newOptionIds = $this->getOptionsArray();

        foreach (array_filter(array_diff($newOptionIds, $currentOptionIds)) as $optionId) {

            /** @var Option $Option */
            if ($option = Option::findOne(['id' => $optionId])) {
                $this->link('options', $option);
            }
        }

        foreach (array_filter(array_diff($currentOptionIds, $newOptionIds)) as $optionId) {
            /** @var Option $option */
            if ($option = Option::findOne(['id' => $optionId])) {
                $this->unlink('options', $option, true);
            }
        }
    }
}
