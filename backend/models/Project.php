<?php

namespace backend\models;

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
            [['name', 'img', 'country', 'date'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 64],
            [['optionsArray'], 'safe'],
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
        ];
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
        $this->updateOptions();
        parent::afterSave($insert, $changedAttributes);
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
