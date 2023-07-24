<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%project_content}}".
 *
 * @property int $id
 * @property int $project_id
 * @property string $language
 * @property string|null $title
 * @property string|null $desc
 * @property string|null $apartment
 *
 * @property Project $project
 */
class ProjectContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%project_content}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'language'], 'required'],
            [['project_id'], 'integer'],
            [['title', 'desc', 'apartment'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::class, 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'language' => 'Language',
            'title' => 'Title',
            'desc' => 'Desc',
            'apartment' => 'Apartment',
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::class, ['id' => 'project_id']);
    }
}
