<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%project_option}}".
 *
 * @property int $project_id
 * @property int $option_id
 *
 * @property Option $option
 * @property Project $project
 */
class ProjectOption extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%project_option}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'option_id'], 'required'],
            [['project_id', 'option_id'], 'integer'],
            [['project_id', 'option_id'], 'unique', 'targetAttribute' => ['project_id', 'option_id']],
            [['option_id'], 'exist', 'skipOnError' => true, 'targetClass' => Option::class, 'targetAttribute' => ['option_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::class, 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'option_id' => 'Option ID',
        ];
    }

    /**
     * Gets query for [[Option]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOption()
    {
        return $this->hasOne(Option::class, ['id' => 'option_id']);
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
