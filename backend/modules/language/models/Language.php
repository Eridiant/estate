<?php


namespace backend\modules\language\models;


use yii\db\ActiveRecord;

class Language extends ActiveRecord
{
    static $current = null;

    public static function tableName()
    {
        return '{{%language}}';
    }

    public function rules()
    {
        return [
            [['name', 'key', 'code'], 'required'],
            [['name', 'key', 'code'], 'string', 'max' => 255],
            [['key', 'code'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '№',
            'name' => 'Язык',
            'key' => 'Url ключ',
            'code' => 'ключ',
        ];
    }

    static function getDefaultLang()
    {
        return Language::find()->where('`default` = :default', [':default' => 1])->one();
    }

    static function getCurrent()
    {
        if( self::$current === null ){
            self::$current = self::getDefaultLang();
        }
        return self::$current;
    }

    static function setCurrent()
    {
        $language = self::getCurrent();
        self::$current = $language;
        \Yii::$app->language = self::$current->key;
    }

    static function getByKey($key)
    {
        return Language::find()->where(['=', 'key', $key])->one();
    }
}