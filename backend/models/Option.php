<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%option}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $type
 *
 * @property ProjectOption[] $projectOptions
 * @property Project[] $projects
 */
class Option extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%option}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'string', 'max' => 255],
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
            'type' => 'Type',
        ];
    }

    /**
     * Gets query for [[ProjectOptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOptions()
    {
        return $this->hasMany(ProjectOption::class, ['option_id' => 'id']);
    }
    public function getProjectOption()
    {
        $lang = Yii::$app->language;
        return $this->hasOne(ProjectOption::class, ['option_id' => 'id', 'lang' => 'lang']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::class, ['id' => 'project_id'])->viaTable('{{%project_option}}', ['option_id' => 'id']);
    }
}
