<?php


namespace backend\modules\language\models;


use yii\db\ActiveRecord;

class Trasnlations extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%lg_source_message}}';
    }

    public function rules()
    {
        return [
            [['category', 'message'], 'required'],
            [['message'], 'string'],
            [['category'], 'in', 'range'=>['common','frontend','backend']]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '№',
            'category' => 'Категория',
            'message' => 'Сообщение',
        ];
    }
    
    public function getTranslaits() {
        return $this->hasMany(TrasnlationsMessage::class, ['id'=>'id']);
    }
    
    public function getTranslait() {
        return $this->hasOne(TrasnlationsMessage::class, ['id'=>'id'])->where(['language'=>\Yii::$app->language]);
    }
}