<?php


namespace backend\modules\language\models;


use yii\db\ActiveRecord;

class TrasnlationsMessage extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%lg_message}}';
    }

    public function rules()
    {
        return [
            [['language', 'translation', 'id'], 'required'],
            [['translation'], 'string'],
            [['language'], 'exist', 'targetClass'=> Language::class, 'targetAttribute'=>'key']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '№',
            'language' => 'Язык',
            'translation' => 'Перевод',
        ];
    }
    
    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    // public function getId0()
    // {
    //     return $this->hasOne(LgSourceMessage::class, ['id' => 'id']);
    // }

    /**
     * Gets query for [[Language0]].
     *
     * @return \yii\db\ActiveQuery
     */
    // public function getLanguage0()
    // {
    //     return $this->hasOne(Language::class, ['key' => 'language']);
    // }
}