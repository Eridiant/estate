<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%message}}".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $subject
 * @property string|null $lang
 * @property string|null $body
 * @property int|null $status_amo_id
 * @property int|null $status_contact_amo_id
 * @property int|null $status_link_amo_id
 * @property int|null $status_mail
 * @property int|null $status_save
 * @property int $ip
 * @property string|null $city
 * @property string|null $country
 * @property string $created_at
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%message}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'ip'], 'required'],
            [['body', 'city', 'country'], 'string'],
            [['status_amo_id', 'status_contact_amo_id', 'status_link_amo_id', 'status_mail', 'status_save', 'ip'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'subject'], 'string', 'max' => 255],
            [['email', 'phone', 'lang'], 'string', 'max' => 32],
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    \yii\db\BaseActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'subject' => 'Subject',
            'lang' => 'Lang',
            'body' => 'Body',
            'status_amo_id' => 'lead',
            'status_contact_amo_id' => 'Contact',
            'status_link_amo_id' => 'Link',
            'status_mail' => 'Status Mail',
            'status_save' => 'Status Save',
            'ip' => 'Ip',
            'city' => 'City',
            'country' => 'Country',
            'created_at' => 'Created At',
        ];
    }
}
