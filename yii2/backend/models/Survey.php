<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "survey".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $created_on
 */
class Survey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'survey';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'created_on'], 'required'],
            [['description'], 'string'],
            [['created_on'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'created_on' => 'Created On',
        ];
    }

    /**
     * @inheritdoc
     * @return SurveyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SurveyQuery(get_called_class());
    }
}
